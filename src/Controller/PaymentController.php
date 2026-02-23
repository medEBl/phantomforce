<?php

namespace App\Controller;

use App\Entity\Payment;
<<<<<<< HEAD
use App\Entity\ShopItem;
use App\Form\PaymentType;
use App\Repository\PaymentRepository;
use App\Service\EmailService;
use Doctrine\ORM\EntityManagerInterface;
use Stripe\Checkout\Session;
use Stripe\Stripe;
=======
use App\Form\PaymentType;
use App\Repository\PaymentRepository;
use Doctrine\ORM\EntityManagerInterface;
>>>>>>> e2422cfde5b308b3f914dbb9a3dd46d1907df62f
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
<<<<<<< HEAD
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use App\Service\InvoiceService;
use Knp\Bundle\SnappyBundle\Snappy\Response\PdfResponse;
use Psr\Log\LoggerInterface;
=======
>>>>>>> e2422cfde5b308b3f914dbb9a3dd46d1907df62f

#[Route('/payment')]
class PaymentController extends AbstractController
{
<<<<<<< HEAD
    private $httpClient;
    private $entityManager;
    private $emailService;
    private $logger;

    public function __construct(
        HttpClientInterface $httpClient,
        EntityManagerInterface $entityManager,
        EmailService $emailService
    ) {
        $this->httpClient = $httpClient;
        $this->entityManager = $entityManager;
        $this->emailService = $emailService;
    }

    #[Route('/', name: 'app_payment_index', methods: ['GET'])]
    public function index(PaymentRepository $paymentRepository): Response
    {   
=======
    #[Route('/', name: 'app_payment_index', methods: ['GET'])]
    public function index(PaymentRepository $paymentRepository): Response
    {
>>>>>>> e2422cfde5b308b3f914dbb9a3dd46d1907df62f
        return $this->render('payment/index.html.twig', [
            'payments' => $paymentRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_payment_new', methods: ['GET', 'POST'])]
<<<<<<< HEAD
public function new(Request $request): Response
{
    $payment = new Payment();
    
    $gameId = $request->query->get('game_id');
    $selectedGame = null;
    
    if ($gameId) {
        try {
            $apiKey = $_ENV['RAWG_API_KEY'] ?? '';
            $response = $this->httpClient->request('GET', "https://api.rawg.io/api/games/{$gameId}", [
                'query' => ['key' => $apiKey]
            ]);
            
            $gameData = $response->toArray();
            $selectedGame = $gameData;
            
            $existingShopItem = $this->entityManager->getRepository(ShopItem::class)
                ->findOneBy(['itemName' => $gameData['name']]);
            
            if (!$existingShopItem) {
                $shopItem = new ShopItem();
                $shopItem->setItemName($gameData['name']);
                $shopItem->setItemDescription($gameData['description_raw'] ?? 'Description non disponible');
                $shopItem->setItemCategory($gameData['genres'][0]['name'] ?? 'Jeu vidéo');
                $shopItem->setPrice('59.99');
                $shopItem->setQuantity(1);
                $shopItem->setTotalPrice('59.99');
                
                $this->entityManager->persist($shopItem);
                $this->entityManager->flush();
                
                $payment->setShopItem($shopItem);
            } else {
                $payment->setShopItem($existingShopItem);
            }
            
            $payment->setAmount('59.99');
            
        } catch (\Exception $e) {
            $this->addFlash('warning', 'Impossible de charger les détails du jeu');
        }
    }
    
    $form = $this->createForm(PaymentType::class, $payment);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        // Récupérer la quantité du formulaire
        $quantity = $form->get('quantity')->getData();
        
        // Calculer le montant total
        $unitPrice = $payment->getAmount();
        $totalAmount = $unitPrice * $quantity;
        $payment->setAmount((string) $totalAmount);
        
        // Stocker la quantité dans la session pour Stripe
        $request->getSession()->set('payment_quantity_' . $payment->getId(), $quantity);
        
        $this->entityManager->persist($payment);
        $this->entityManager->flush();

        $this->emailService->sendPaymentConfirmation($payment, 'sandbox.smtp.mailtrap.io');

        $this->addFlash('success', $quantity . ' exemplaire(s) acheté(s) avec succès !');
        return $this->redirectToRoute('app_payment_show', ['id' => $payment->getId()]);
    }

    return $this->render('payment/new.html.twig', [
        'payment' => $payment,
        'form' => $form->createView(),
        'selectedGame' => $selectedGame
    ]);
}

    #[Route('/{id}', name: 'app_payment_show', methods: ['GET'])]
    public function show(int $id, PaymentRepository $paymentRepository): Response
    {
        $payment = $paymentRepository->find($id);
        
        if (!$payment) {
            $this->addFlash('error', 'Paiement #' . $id . ' introuvable');
            return $this->redirectToRoute('app_payment_index');
        }
        
=======
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $payment = new Payment();
        $form = $this->createForm(PaymentType::class, $payment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($payment);
            $entityManager->flush();

            return $this->redirectToRoute('app_payment_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('payment/new.html.twig', [
            'payment' => $payment,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_payment_show', methods: ['GET'])]
    public function show(Payment $payment): Response
    {
>>>>>>> e2422cfde5b308b3f914dbb9a3dd46d1907df62f
        return $this->render('payment/show.html.twig', [
            'payment' => $payment,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_payment_edit', methods: ['GET', 'POST'])]
<<<<<<< HEAD
    public function edit(int $id, Request $request, PaymentRepository $paymentRepository): Response
    {
        $payment = $paymentRepository->find($id);
        
        if (!$payment) {
            $this->addFlash('error', 'Paiement introuvable');
            return $this->redirectToRoute('app_payment_index');
        }
        
=======
    public function edit(Request $request, Payment $payment, EntityManagerInterface $entityManager): Response
    {
>>>>>>> e2422cfde5b308b3f914dbb9a3dd46d1907df62f
        $form = $this->createForm(PaymentType::class, $payment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
<<<<<<< HEAD
            $this->entityManager->flush();
            $this->addFlash('success', 'Paiement modifié avec succès !');
            return $this->redirectToRoute('app_payment_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('payment/edit.html.twig', [
            'payment' => $payment,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}/delete', name: 'app_payment_delete', methods: ['POST'])]
    public function delete(int $id, Request $request, PaymentRepository $paymentRepository): Response
    {
        $payment = $paymentRepository->find($id);
        
        if (!$payment) {
            $this->addFlash('error', 'Paiement introuvable');
            return $this->redirectToRoute('app_payment_index');
        }
        
        if ($this->isCsrfTokenValid('delete'.$payment->getId(), $request->request->get('_token'))) {
            $this->entityManager->remove($payment);
            $this->entityManager->flush();
            $this->addFlash('success', 'Paiement supprimé avec succès !');
=======
            $entityManager->flush();

            return $this->redirectToRoute('app_payment_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('payment/edit.html.twig', [
            'payment' => $payment,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_payment_delete', methods: ['POST'])]
    public function delete(Request $request, Payment $payment, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$payment->getId(), $request->request->get('_token'))) {
            $entityManager->remove($payment);
            $entityManager->flush();
>>>>>>> e2422cfde5b308b3f914dbb9a3dd46d1907df62f
        }

        return $this->redirectToRoute('app_payment_index', [], Response::HTTP_SEE_OTHER);
    }
<<<<<<< HEAD

    #[Route('/checkout/{id}', name: 'app_payment_checkout')]
public function checkout(Payment $payment, Request $request): Response
{
    Stripe::setApiKey($_ENV['STRIPE_SECRET_KEY']);
    
    try {
        // Récupérer la quantité depuis la session
        $quantity = $request->getSession()->get('payment_quantity_' . $payment->getId(), 1);
        
        $session = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'eur',
                    'product_data' => [
                        'name' => $payment->getShopItem()->getItemName(),
                        'description' => 'Jeu vidéo - Phantom Shop',
                    ],
                    'unit_amount' => ($payment->getAmount() / $quantity) * 100,
                ],
                'quantity' => $quantity,
            ]],
            'mode' => 'payment',
            'success_url' => 'http://127.0.0.1:8000/payment/success/' . $payment->getId(),
            'cancel_url' => 'http://127.0.0.1:8000/payment/cancel/' . $payment->getId(),
            'metadata' => [
                'payment_id' => $payment->getId(),
                'quantity' => $quantity
            ]
        ]);
        
        return $this->redirect($session->url);
        
    } catch (\Exception $e) {
        $this->addFlash('error', 'Erreur Stripe: ' . $e->getMessage());
        return $this->redirectToRoute('app_payment_show', ['id' => $payment->getId()]);
    }
}

    #[Route('/success/{id}', name: 'app_payment_success')]
    public function paymentSuccess(Payment $payment, InvoiceService $invoiceService): Response
    {
        // Mettre à jour le statut du paiement
        $payment->setPaymentStatus('success');
        $this->entityManager->flush();

        // Générer la facture automatiquement
        try {
            $invoicePath = $invoiceService->generateInvoice($payment);
            $this->addFlash('success', 'Paiement réussi ! Votre facture a été générée.');
        } catch (\Exception $e) {
            $this->logger->error('Erreur génération facture: ' . $e->getMessage());
            $this->addFlash('warning', 'Paiement réussi mais la facture n\'a pas pu être générée.');
        }
        
        return $this->render('payment/success.html.twig', [
            'payment' => $payment,
            'invoiceGenerated' => isset($invoicePath)
        ]);
    }

    // ============ TESTS ============
    #[Route('/test/email', name: 'app_test_email')]
public function testEmail(): Response
{
    try {
        $payment = new Payment();
        $payment->setAmount('99.99');
        $payment->setTransactionRef('TEST-' . uniqid());
        $payment->setPaymentStatus('success');
        
        $result = $this->emailService->sendPaymentConfirmation($payment, 'test@mailtrap.io');
        
        if ($result) {
            $this->addFlash('success', 'Email envoyé ! Vérifiez Mailtrap');
        } else {
            $this->addFlash('error', 'Échec de l\'envoi');
        }
    } catch (\Exception $e) {
        $this->addFlash('error', 'Erreur : ' . $e->getMessage());
    }
    
    return $this->redirectToRoute('app_payment_index');
}
    #[Route('/test/mailtrap', name: 'app_test_mailtrap')]
    public function testMailtrap(MailerInterface $mailer): Response
    {
        try {
            $email = (new Email())
                ->from('noreply@phantom-shop.com')
                ->to('test@example.com')
                ->subject('Test Mailtrap')
                ->text('Ceci est un test direct');
            
            $mailer->send($email);
            
            $this->addFlash('success', '✅ Email direct envoyé ! Vérifiez Mailtrap');
        } catch (\Exception $e) {
            $this->addFlash('error', '❌ Erreur : ' . $e->getMessage());
        }
        
        return $this->redirectToRoute('app_payment_index');
    }
    #[Route('/test-mailer', name: 'app_test_mailer')]
public function testMailer(MailerInterface $mailer): Response
{
    try {
        $email = (new Email())
            ->from('noreply@phantom-shop.com')
            ->to('test@example.com')
            ->subject('Test Symfony ' . date('H:i:s'))
            ->text('Ceci est un test depuis Symfony');
        
        $mailer->send($email);
        
        return new Response('✅ Email envoyé ! Vérifie Mailtrap');
        
    } catch (\Exception $e) {
        return new Response('❌ Erreur : ' . $e->getMessage());
    }
}
#[Route('/{id}/invoice', name: 'app_payment_invoice')]
public function downloadInvoice(Payment $payment, InvoiceService $invoiceService): Response
{
    try {
        return $invoiceService->downloadInvoice($payment);
    } catch (\Exception $e) {
        $this->addFlash('error', 'Impossible de générer la facture : ' . $e->getMessage());
        return $this->redirectToRoute('app_payment_show', ['id' => $payment->getId()]);
    }
}
#[Route('/test-invoice', name: 'app_test_invoice')]
public function testInvoice(InvoiceService $invoiceService): Response
{
    try {
        // Crée un faux paiement pour le test
        $payment = new Payment();
        $payment->setAmount('59.99');
        $payment->setTransactionRef('TEST-' . uniqid());
        $payment->setPaymentStatus('success');
        $payment->setPaymentDate(new \DateTimeImmutable());
        
        // Crée un faux article
        $shopItem = new ShopItem();
        $shopItem->setItemName('Jeu de test');
        $shopItem->setQuantity(1);
        $shopItem->setPrice('59.99');
        $payment->setShopItem($shopItem);
        
        return $invoiceService->downloadInvoice($payment);
        
    } catch (\Exception $e) {
        return new Response('Erreur : ' . $e->getMessage());
    }
}
}
=======
}
>>>>>>> e2422cfde5b308b3f914dbb9a3dd46d1907df62f
