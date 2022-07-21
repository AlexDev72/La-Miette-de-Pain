<?php

namespace App\Controller;

use App\Entity\Viennoiserie;
use App\Repository\ViennoiserieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ViennoiserieController extends AbstractController
{
    #[Route('/viennoiserie', name: 'viennoiserie_show')]
    public function show(Viennoiserie $viennoiserie): Response
    {
        if (!$viennoiserie) {
            return $this->redirectToRoute('app_home');
        }

        return $this->render('viennoiserie/index.html.twig', [
            'controller_name' => 'La Miette de Pain',
            'viennoiserie' => $viennoiserie,
        ]);
    }

    #[Route('/viennoiseries', name: 'viennoiserie_show')]
    public function liste(ViennoiserieRepository $viennoiserieRepo): Response
    {
        return $this->render('viennoiserie/list.html.twig', [
            "viennoiseries" => $viennoiserieRepo->findAll(),
        ]);
    }
}
