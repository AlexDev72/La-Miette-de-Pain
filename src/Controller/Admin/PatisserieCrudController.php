<?php

namespace App\Controller\Admin;

use App\Entity\Patisserie;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\SlugField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;

class PatisserieCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Patisserie::class;
    }

    public const PRODUCTS_BASE_PATH = 'upload/images/Patisserie';
    public const PRODUCTS_UPLOAD_DIR = 'public/upload/images/Patisserie';

    public function configureFields(string $pageName): iterable
    {
        return [
            yield  IdField::new('id')
                ->hideOnForm(),
            yield  TextField::new('Name'),
            yield  MoneyField::new('Prix')
                ->setCurrency('EUR'),
            yield  TextEditorField::new('description'),
            yield  TextEditorField::new('allergene'),
            yield  ImageField::new('image')
                ->setBasePath(self::PRODUCTS_BASE_PATH)
                ->setUploadDir(self::PRODUCTS_UPLOAD_DIR),
            yield  BooleanField::new('Active'),
            yield  SlugField::new('Slug')
                ->setTargetFieldName('Name')
        ];
    }
}
