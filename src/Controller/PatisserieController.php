<?php

namespace App\Controller;

use App\Repository\PatisserieRepository;
use App\Entity\Patisserie;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PatisserieController extends AbstractController
{
    #[Route('/patisseries', name: 'patisserie_liste')]
    public function liste(PatisserieRepository $patisserieRepo){
        return $this->render("patisserie/list.html.twig" , [
            "patisseries" => $patisserieRepo->findAll(),

        ]);

    }

    #[Route('/patisserie/{Slug}', name: 'patisserie_show')]
    public function show(Patisserie $patisserie): Response
    {
        if(!$patisserie){
            return $this->redirectToRoute('app_home');
        }

        return $this->render('patisserie/detail.html.twig', [
            'controller_name' => 'La Miette de Pain',
            'patisserie' => $patisserie,
        ]);
    }

}
