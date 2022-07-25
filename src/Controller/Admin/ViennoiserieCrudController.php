<?php

namespace App\Controller\Admin;

use App\Entity\Viennoiserie;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\SlugField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;

class ViennoiserieCrudController extends AbstractCrudController
{

    public const ACTION_DUPLICATE = 'duplicate';
    public const PRODUCTS_BASE_PATH = 'upload/images/Viennoiserie';
    public const PRODUCTS_UPLOAD_DIR = 'public/upload/images/Viennoiserie';

    public static function getEntityFqcn(): string
    {
        return Viennoiserie::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            yield  IdField::new('id')->hideOnForm(),
            yield  TextField::new('Name', 'nom'),
            yield  MoneyField::new('Prix')->setCurrency('EUR'),
            yield  TextEditorField::new('description'),
            yield  TextEditorField::new('allergene'),
            yield  ImageField::new('image')
                ->setBasePath(self::PRODUCTS_BASE_PATH)
                ->setUploadDir(self::PRODUCTS_UPLOAD_DIR),
            yield      BooleanField::new('Active'),
            yield  SlugField::new('Slug')
                ->setTargetFieldName('Name')
        ];
    }
}
