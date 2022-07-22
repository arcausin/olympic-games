<?php

namespace App\Controller\Admin;

use App\Entity\CategoriesSports;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class CategoriesSportsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return CategoriesSports::class;
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
