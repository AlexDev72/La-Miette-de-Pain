<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ViennoiserieController extends AbstractController
{
    #[Route('/viennoiserie', name: 'app_viennoiserie')]
    public function index(): Response
    {
        return $this->render('viennoiserie/index.html.twig', [
            'controller_name' => 'La Miette de Pain',
        ]);
    }
}
