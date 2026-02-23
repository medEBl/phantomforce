<?php

namespace App\Service;

use App\Entity\Payment;
use App\Entity\ShopItem;
use Dompdf\Dompdf;
use Dompdf\Options;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Filesystem\Filesystem;

class InvoiceService
{
    private LoggerInterface $logger;
    private string $invoiceDirectory;

    public function __construct(LoggerInterface $logger, ?string $projectDir = null)
    {
        $this->logger = $logger;
        
        // Utiliser le répertoire courant par défaut si $projectDir n'est pas fourni
        $projectDir = $projectDir ?? dirname(__DIR__, 2);
        $this->invoiceDirectory = $projectDir . '/var/invoices';
        
        // Crée le dossier des factures s'il n'existe pas
        $filesystem = new Filesystem();
        if (!$filesystem->exists($this->invoiceDirectory)) {
            $filesystem->mkdir($this->invoiceDirectory);
        }
    }

    /**
     * Génère une facture et la sauvegarde sur le serveur
     */
    public function generateInvoice(Payment $payment): string
    {
        $shopItem = $payment->getShopItem();
        $html = $this->generateInvoiceHtml($payment, $shopItem);
        
        // Nom du fichier avec la date pour éviter les doublons
        $filename = sprintf('facture-%s-%s.pdf', 
            $payment->getTransactionRef(),
            (new \DateTime())->format('Ymd-His')
        );
        
        $filepath = $this->invoiceDirectory . '/' . $filename;
        
        try {
            // Configuration de Dompdf
            $options = new Options();
            $options->set('defaultFont', 'Arial');
            $options->set('isRemoteEnabled', true);
            
            $dompdf = new Dompdf($options);
            $dompdf->loadHtml($html);
            $dompdf->setPaper('A4', 'portrait');
            $dompdf->render();
            
            // Sauvegarde du PDF
            file_put_contents($filepath, $dompdf->output());
            
            $this->logger->info('Facture générée et sauvegardée', [
                'payment_id' => $payment->getId(),
                'filename' => $filename
            ]);
            
            return $filepath;
            
        } catch (\Exception $e) {
            $this->logger->error('Erreur génération facture: ' . $e->getMessage());
            throw $e;
        }
    }

    /**
     * Télécharge la facture pour un paiement
     */
    public function downloadInvoice(Payment $payment): Response
    {
        $shopItem = $payment->getShopItem();
        $html = $this->generateInvoiceHtml($payment, $shopItem);
        
        $filename = sprintf('facture-%s.pdf', $payment->getTransactionRef());
        
        try {
            // Configuration de Dompdf
            $options = new Options();
            $options->set('defaultFont', 'Arial');
            $options->set('isRemoteEnabled', true);
            
            $dompdf = new Dompdf($options);
            $dompdf->loadHtml($html);
            $dompdf->setPaper('A4', 'portrait');
            $dompdf->render();
            
            // Génération du PDF
            $output = $dompdf->output();
            
            return new Response($output, 200, [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'attachment; filename="' . $filename . '"',
                'Content-Length' => strlen($output),
            ]);
            
        } catch (\Exception $e) {
            $this->logger->error('Erreur Dompdf: ' . $e->getMessage());
            throw $e;
        }
    }

    /**
     * Génère le contenu HTML de la facture
     */
    private function generateInvoiceHtml(Payment $payment, ?ShopItem $shopItem): string
    {
        $invoiceNumber = 'FACT-' . date('Y') . '-' . str_pad($payment->getId(), 6, '0', STR_PAD_LEFT);
        
        $html = '
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset="UTF-8">
            <title>Facture ' . $invoiceNumber . '</title>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    margin: 20px;
                    color: #333;
                }
                .header {
                    text-align: center;
                    margin-bottom: 30px;
                    padding-bottom: 20px;
                    border-bottom: 2px solid #ff0033;
                }
                .header h1 {
                    color: #ff0033;
                }
                .invoice-info {
                    display: flex;
                    justify-content: space-between;
                    margin-bottom: 30px;
                    padding: 20px;
                    background: #f5f5f5;
                    border-radius: 5px;
                }
                table {
                    width: 100%;
                    border-collapse: collapse;
                    margin: 30px 0;
                }
                th {
                    background: #ff0033;
                    color: white;
                    padding: 12px;
                    text-align: left;
                }
                td {
                    padding: 12px;
                    border-bottom: 1px solid #ddd;
                }
                .total-row {
                    background: #f5f5f5;
                    font-weight: bold;
                }
                .footer {
                    margin-top: 50px;
                    text-align: center;
                    font-size: 12px;
                    color: #666;
                }
            </style>
        </head>
        <body>
            <div class="header">
                <h1>PHANTOM SHOP</h1>
                <p>Facture de vente</p>
            </div>
            
            <div class="invoice-info">
                <div>
                    <h3>Émetteur :</h3>
                    <p><strong>Phantom Shop</strong><br>
                    123 Rue des Jeux Vidéo<br>
                    75001 Paris, France</p>
                </div>
                <div>
                    <h3>Client :</h3>
                    <p><strong>Client Phantom Shop</strong><br>
                    contact@client.com</p>
                </div>
            </div>
            
            <p><strong>N° Facture :</strong> ' . $invoiceNumber . '</p>
            <p><strong>Date :</strong> ' . (new \DateTime())->format('d/m/Y H:i') . '</p>
            <p><strong>Référence transaction :</strong> ' . $payment->getTransactionRef() . '</p>
            
            <table>
                <thead>
                    <tr>
                        <th>Description</th>
                        <th>Quantité</th>
                        <th>Prix unitaire</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>';
        
        if ($shopItem) {
            $html .= '
                    <tr>
                        <td>' . $shopItem->getItemName() . '</td>
                        <td>' . ($shopItem->getQuantity() ?: 1) . '</td>
                        <td>' . $shopItem->getPrice() . ' €</td>
                        <td>' . $payment->getAmount() . ' €</td>
                    </tr>';
        }
        
        $html .= '
                    <tr class="total-row">
                        <td colspan="3" style="text-align: right;"><strong>TOTAL TTC</strong></td>
                        <td><strong>' . $payment->getAmount() . ' €</strong></td>
                    </tr>
                </tbody>
            </table>
            
            <div class="footer">
                <p>Phantom Shop - SAS au capital de 10 000 €</p>
                <p>Cette facture a été générée automatiquement. Merci de votre confiance !</p>
            </div>
        </body>
        </html>';
        
        return $html;
    }
}