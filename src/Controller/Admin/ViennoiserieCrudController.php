<?php

namespace App\Controller\Admin;

use App\Entity\Viennoiserie;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ViennoiserieCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Viennoiserie::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
