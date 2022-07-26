<?php

namespace App\Controller;

use App\Repository\TraiteurRepository;
use App\Entity\Traiteur;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TraiteurController extends AbstractController
{
    #[Route('/traiteurs', name: 'traiteur_liste')]
    public function liste(TraiteurRepository $traiteurRepo){
        return $this->render("traiteur/list.html.twig" , [
            "traiteurs" => $traiteurRepo->findAll(),

        ]);

    }

    #[Route('/traiteur/{Slug}', name: 'traiteur_show')]
    public function show(Traiteur $traiteur): Response
    {
        if(!$traiteur){
            return $this->redirectToRoute('app_home');
        }

        return $this->render('traiteur/detail.html.twig', [
            'controller_name' => 'La Miette de Pain',
            'traiteur' => $traiteur,
        ]);
    }
}
