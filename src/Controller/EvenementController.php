<?php

namespace App\Controller;

use App\Repository\MariageRepository;
use App\Entity\mariage;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EvenementController extends AbstractController
{
    #[Route('/mariage', name: 'evenement_liste')]
    public function liste(MariageRepository $mariageRepository)
    {
        return $this->render('mariage/index.html.twig', [
            'mariages' => $mariageRepository->findAll(),
        ]);
    }

    #[Route('/fêtes', name: 'fetes_liste')]
    public function lister(MariageRepository $mariageRepository)
    {
        return $this->render('fetes/index.html.twig', [
            'fetes' => $mariageRepository->findAll(),
        ]);
    }
}
