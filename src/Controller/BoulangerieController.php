<?php

namespace App\Controller;

use App\Entity\Boulangerie;
use App\Repository\BoulangerieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BoulangerieController extends AbstractController
{
    #[Route('/boulangerie', name: 'boulangerie_show')]
    public function show(Boulangerie $boulangerie): Response
    {
        return $this->render('boulangerie/index.html.twig', [
            'controller_name' => 'Boulangerie',
            'boulnagerie' => $boulangerie,

        ]);
    }

    #[Route('/boulangeries', name: 'boulangeries_show')]
    public function Liste(BoulangerieRepository $boulangerieRepo): Response
    {
        return $this->render("boulangerie/list.html.twig", [
            "boulangeries" => $boulangerieRepo->findAll(),

        ]);
    }
}
