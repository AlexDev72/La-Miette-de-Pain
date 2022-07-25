<?php

namespace App\Controller;

use App\Entity\Boulangerie;
use App\Repository\BoulangerieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BoulangerieController extends AbstractController
{


    #[Route('/boulangeries', name: 'boulangeries_show')]
    public function liste(BoulangerieRepository $boulangerieRepo): Response
    {
        return $this->render("boulangerie/list.html.twig", [
            "boulangeries" => $boulangerieRepo->findAll(),

        ]);
    }

    #[Route('/boulangerie/{Slug}', name: 'boulangerie_show')]
    public function show(Boulangerie $boulangerie): Response
    {
        if (!$boulangerie) {
            return $this->redirectToRoute('app_home');
        }

        return $this->render('boulangerie/list.html.twig', [
            'controller_name' => 'Boulangerie',
            'boulangerie' => $boulangerie,

        ]);
    }
}
