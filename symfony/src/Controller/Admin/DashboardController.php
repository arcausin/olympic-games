<?php

namespace App\Controller\Admin;

use App\Entity\Athletes;
use App\Entity\CategoriesSports;
use App\Entity\Sports;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return parent::index();
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Olympic Games');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Sports', 'fas fa-list', Sports::class);
        yield MenuItem::linkToCrud('Catégories de Sports', 'fas fa-list', CategoriesSports::class);
        yield MenuItem::linkToCrud('Athlètes', 'fas fa-list', Athletes::class);
    }
}
