<?php

namespace App\Controller\Admin;

use App\Entity\Patisserie;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class PatisserieCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Patisserie::class;
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
