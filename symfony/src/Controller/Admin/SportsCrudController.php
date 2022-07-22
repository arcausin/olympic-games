<?php

namespace App\Controller\Admin;

use App\Entity\Sports;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class SportsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Sports::class;
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
