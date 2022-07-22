<?php

namespace App\Controller;

use App\Entity\Sports;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ListeSportsController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    /**
     * @Route("/sports", name="app_liste_sports")
     */
    public function index(): Response
    {
        $sports = $this->entityManager->getRepository(Sports::class)->findAll();

        return $this->render('liste_sports/index.html.twig', [
            'controller_name' => 'ListeSportsController',
            'sports' => $sports
        ]);
    }
}
