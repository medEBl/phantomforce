<?php

namespace App\Controller;

use App\Entity\ShopItem;
use App\Form\ShopItemType;
use App\Repository\ShopItemRepository;
use App\Repository\PaymentRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


#[Route('/shop')] 
class ShopItemController extends AbstractController
{
    #[Route('/', name: 'app_shop_item_index', methods: ['GET'])]
    public function index(ShopItemRepository $shopItemRepository, PaymentRepository $paymentRepository): Response // AJOUTER PaymentRepository
    {
        return $this->render('shop_item/index.html.twig', [
            'shop_items' => $shopItemRepository->findAll(),
            'payments' => $paymentRepository->findAll(), // AJOUTER
            'total_sales' => $shopItemRepository->getTotalSales() ?? 0,
        ]);
    }

    #[Route('/new', name: 'app_shop_item_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $shopItem = new ShopItem();
        $form = $this->createForm(ShopItemType::class, $shopItem);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($shopItem);
            $entityManager->flush();

            return $this->redirectToRoute('app_shop_item_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('shop_item/new.html.twig', [
            'shop_item' => $shopItem,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_shop_item_show', methods: ['GET'])]
    public function show(ShopItem $shopItem): Response
    {
        return $this->render('shop_item/show.html.twig', [
            'shop_item' => $shopItem,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_shop_item_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, ShopItem $shopItem, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ShopItemType::class, $shopItem);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_shop_item_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('shop_item/edit.html.twig', [
            'shop_item' => $shopItem,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_shop_item_delete', methods: ['POST'])]
    public function delete(Request $request, ShopItem $shopItem, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$shopItem->getId(), $request->request->get('_token'))) {
            $entityManager->remove($shopItem);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_shop_item_index', [], Response::HTTP_SEE_OTHER);
    }

    
    
}
