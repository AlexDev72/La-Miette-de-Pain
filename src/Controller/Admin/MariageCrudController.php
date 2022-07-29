<?php

namespace App\Controller\Admin;

use App\Entity\mariage;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;


class MariageCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return mariage::class;
    }

    public const PRODUCTS_BASE_PATH = 'upload/images/Slider/mariage';
    public const PRODUCTS_UPLOAD_DIR = 'public/upload/images/Slider/mariage';

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