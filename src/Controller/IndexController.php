<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    #[Route('/', name: 'app_index')]
    public function index(): Response
    {
        return $this->render('index/index.html.twig', [
            'controller_name' => 'La Miette de Pain',
        ]);
    }

    #[Route('/rgpd', name: 'rgpd')]
    public function show(): Response
    {
        return $this->render('Rgpd/rgpd.html.twig', [
           
        ]);
    }
}