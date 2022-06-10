<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategoriesController extends AbstractController
{
    /**
     * @Route("/categories", name="app_categories")
     */
    public function index(): Response
    {
        return $this->render('categories/index.html.twig', [
            'controller_name' => 'CategoriesController',
        ]);
    }


    /**
     * @Route("/nouvelleCategorie", name="app_nouvelleCategorie")
     */
    public function nouvelleCategorie(): Response
    {
        return $this->render('categories/nouvelleCategorie.html.twig', [
            'controller_name' => 'CategoriesController',
        ]);
    }
}
