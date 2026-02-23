<?php

namespace App\Service;

use App\Entity\Payment;
use PayPal\Api\Amount;
use PayPal\Api\Payer;
use PayPal\Api\Payment as PayPalPayment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Rest\ApiContext;
use Psr\Log\LoggerInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class PayPalService
{
    private ApiContext $apiContext;
    private LoggerInterface $logger;
    private UrlGeneratorInterface $urlGenerator;
    private string $currency;

    public function __construct(
        string $clientId,
        string $clientSecret,
        string $mode,
        string $currency,
        LoggerInterface $logger,
        UrlGeneratorInterface $urlGenerator
    ) {
        $this->apiContext = new ApiContext(
            new OAuthTokenCredential($clientId, $clientSecret)
        );
        
        $this->apiContext->setConfig([
            'mode' => $mode,
            'http.ConnectionTimeOut' => 30,
            'log.LogEnabled' => true,
            'log.FileName' => __DIR__ . '/../../var/log/paypal.log',
            'log.LogLevel' => 'ERROR',
            'validation.level' => 'log'
        ]);

        $this->currency = $currency;
        $this->logger = $logger;
        $this->urlGenerator = $urlGenerator;
    }

    public function createPayment(Payment $payment, array $itemDetails = []): ?PayPalPayment
    {
        try {
            $payer = new Payer();
            $payer->setPaymentMethod('paypal');

            $amount = new Amount();
            $amount->setCurrency($this->currency)
                   ->setTotal(number_format($payment->getAmount(), 2, '.', ''));

            $transaction = new Transaction();
            $transaction->setAmount($amount)
                       ->setDescription('Paiement Phantom Shop')
                       ->setInvoiceNumber($payment->getTransactionRef());

            if (!empty($itemDetails)) {
                $items = [];
                $item = new \PayPal\Api\Item();
                $item->setName($itemDetails['name'] ?? 'Produit')
                     ->setCurrency($this->currency)
                     ->setQuantity($itemDetails['quantity'] ?? 1)
                     ->setPrice(number_format($payment->getAmount() / ($itemDetails['quantity'] ?? 1), 2, '.', ''));
                $items[] = $item;
                
                $itemList = new \PayPal\Api\ItemList();
                $itemList->setItems($items);
                $transaction->setItemList($itemList);
            }

            $redirectUrls = new RedirectUrls();
            $redirectUrls->setReturnUrl($this->urlGenerator->generate('app_payment_paypal_success', [
                'id' => $payment->getId()
            ], UrlGeneratorInterface::ABSOLUTE_URL))
                         ->setCancelUrl($this->urlGenerator->generate('app_payment_paypal_cancel', [
                             'id' => $payment->getId()
                         ], UrlGeneratorInterface::ABSOLUTE_URL));

            $paypalPayment = new PayPalPayment();
            $paypalPayment->setIntent('sale')
                         ->setPayer($payer)
                         ->setRedirectUrls($redirectUrls)
                         ->setTransactions([$transaction]);

            $paypalPayment->create($this->apiContext);

            $this->logger->info('Paiement PayPal créé', [
                'payment_id' => $payment->getId(),
                'paypal_payment_id' => $paypalPayment->getId()
            ]);

            return $paypalPayment;

        } catch (\Exception $e) {
            $this->logger->error('Erreur création paiement PayPal: ' . $e->getMessage(), [
                'payment_id' => $payment->getId()
            ]);
            return null;
        }
    }

    public function executePayment(string $paymentId, string $payerId): ?PayPalPayment
    {
        try {
            $payment = PayPalPayment::get($paymentId, $this->apiContext);

            $execution = new PaymentExecution();
            $execution->setPayerId($payerId);

            $result = $payment->execute($execution, $this->apiContext);

            $this->logger->info('Paiement PayPal exécuté', [
                'payment_id' => $paymentId,
                'state' => $result->getState()
            ]);

            return $result;

        } catch (\Exception $e) {
            $this->logger->error('Erreur exécution paiement PayPal: ' . $e->getMessage(), [
                'payment_id' => $paymentId
            ]);
            return null;
        }
    }

    public function refundPayment(string $paypalPaymentId, ?float $amount = null): bool
    {
        try {
            $payment = PayPalPayment::get($paypalPaymentId, $this->apiContext);
            
            $transactions = $payment->getTransactions();
            if (empty($transactions)) {
                return false;
            }

            $relatedResources = $transactions[0]->getRelatedResources();
            if (empty($relatedResources)) {
                return false;
            }

            $sale = $relatedResources[0]->getSale();
            
            $refund = new \PayPal\Api\Refund();
            if ($amount) {
                $amountObj = new Amount();
                $amountObj->setCurrency($this->currency)
                         ->setTotal(number_format($amount, 2, '.', ''));
                $refund->setAmount($amountObj);
            }

            $sale->refund($refund, $this->apiContext);

            $this->logger->info('Remboursement effectué', [
                'payment_id' => $paypalPaymentId,
                'amount' => $amount
            ]);

            return true;

        } catch (\Exception $e) {
            $this->logger->error('Erreur remboursement: ' . $e->getMessage(), [
                'payment_id' => $paypalPaymentId
            ]);
            return false;
        }
    }

    public function getPaymentDetails(string $paypalPaymentId): ?PayPalPayment
    {
        try {
            return PayPalPayment::get($paypalPaymentId, $this->apiContext);
        } catch (\Exception $e) {
            $this->logger->error('Erreur récupération détails: ' . $e->getMessage());
            return null;
        }
    }
}