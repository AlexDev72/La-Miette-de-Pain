<?php

namespace App\Controller\Admin;

use App\Entity\Traiteur;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;

class TraiteurCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Traiteur::class;
    }

    public const PRODUCTS_BASE_PATH = 'upload/images/traiteur';
    public const PRODUCTS_UPLOAD_DIR = 'public/upload/images/traiteur';

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('Name'),
            MoneyField::new('Prix')->setCurrency('EUR'),
            TextEditorField::new('description'),
            TextEditorField::new('allergene'),
            ImageField::new('image')
                ->setBasePath(self::PRODUCTS_BASE_PATH)
                ->setUploadDir(self::PRODUCTS_UPLOAD_DIR),
        ];
    }
}
