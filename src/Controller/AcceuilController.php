<?php
// src/Controller/AcceuilController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AcceuilController extends AbstractController
{
    #[Route('/aceuil', name: 'app_acceuil')]
    public function index(): Response
    {
        return $this->render('acceuil/acceuil.html.twig');
    }
}