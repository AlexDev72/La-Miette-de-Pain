<?php

namespace App\Controller\Admin;

use App\Entity\Evenement;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;


class EvenementCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Evenement::class;
    }

    public const PRODUCTS_BASE_PATH = 'upload/images/Slider';
    public const PRODUCTS_UPLOAD_DIR = 'public/upload/images/Slider/fetes';

    public function configureFields(string $pageName): iterable
    {
        return [
            yield  IdField::new('id')
                ->hideOnForm(),
            yield  TextField::new('Name'),
            yield  ImageField::new('image')
                ->setBasePath(self::PRODUCTS_BASE_PATH)
                ->setUploadDir(self::PRODUCTS_UPLOAD_DIR),

        ];
    }
}