<?php

namespace App\Controller\Admin;

use App\Entity\Contact;
use App\Entity\mariage;
use App\Entity\Patisserie;
use App\Entity\Traiteur;
use App\Entity\Viennoiserie;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use PhpParser\Builder\Trait_;

class DashboardController extends AbstractDashboardController
{
    public function __construct(
        private AdminUrlGenerator $adminUrlGenerator
    ) {
    }

    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        $url = $this->adminUrlGenerator
            ->setController(PatisserieCrudController::class)
            ->generateUrl();

        return $this->redirect($url);
    }


    // Option 1. You can make your dashboard redirect to some common page of your backend
    //
    // $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
    // return $this->redirect($adminUrlGenerator->setController(OneOfYourCrudController::class)->generateUrl());

    // Option 2. You can make your dashboard redirect to different pages depending on the user
    //
    // if ('jane' === $this->getUser()->getUsername()) {
    //     return $this->redirect('...');
    // }

    // Option 3. You can render some custom template to display a proper dashboard with widgets, etc.
    // (tip: it's easier if your template extends from @EasyAdmin/page/content.html.twig)
    //
    // return $this->render('some/path/my-dashboard.html.twig');


    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('La Miette De Pain');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToRoute('Aller sur le site', 'fa fa-undo', 'app_index');

        yield MenuItem::section('Produits');

        yield MenuItem::subMenu('Pâtisserie', 'fas fa-bar')->setSubItems([
            MenuItem::linkToCrud('Ajoutez une pâtisserie', 'fas fa-plus', Patisserie::class)->setAction(Crud::PAGE_NEW),
            MenuItem::linkToCrud('Voir les pâtisseries', 'fas fa-eye', Patisserie::class)

        ]);

        yield MenuItem::subMenu('Viennoiserie', 'fas fa-bar')->setSubItems([
            MenuItem::linkToCrud('Ajoutez une viennoiserie', 'fas fa-plus', Viennoiserie::class)->setAction(Crud::PAGE_NEW),
            MenuItem::linkToCrud('Voir les viennoiseries', 'fas fa-eye', Viennoiserie::class)

        ]);

        yield MenuItem::subMenu('Traiteur', 'fas fa-bar')->setSubItems([
            MenuItem::linkToCrud('Ajoutez un sandwich', 'fas fa-plus', Traiteur::class)->setAction(Crud::PAGE_NEW),
            MenuItem::linkToCrud('Voir les sandwich', 'fas fa-eye', Traiteur::class)

        ]);

        yield MenuItem::subMenu('Mariage/Anniversaire', 'fas fa-bar')->setSubItems([
            MenuItem::linkToCrud('Ajoutez une image', 'fas fa-plus', mariage::class)->setAction(Crud::PAGE_NEW),
            MenuItem::linkToCrud('Voir les images', 'fas fa-eye', mariage::class)

        ]);
        yield MenuItem::subMenu('Fêtes', 'fas fa-bar')->setSubItems([
            MenuItem::linkToCrud('Ajoutez une image', 'fas fa-plus', mariage::class)->setAction(Crud::PAGE_NEW),
            MenuItem::linkToCrud('Voir les images', 'fas fa-eye', mariage::class)

        ]) ;

        yield MenuItem::subMenu('message', 'fas fa-bar')->setSubItems([
            MenuItem::linkToCrud('Voir les messages', 'fas fa-eye', contact::class)

        ]) ;

    }
}
