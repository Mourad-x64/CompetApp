<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CommercialController extends AbstractController
    /**
     * @Route("/commercial")
     */
{
    /**
     * @Route("/", name="app_commercial")
     */
    public function index(): Response
    {
        return $this->render('commercial/index.html.twig', [
            'controller_name' => 'CommercialController',
        ]);
    }

    /**
     * @Route("/new", name="app_new")
     */
    public function new(): Response
    {
        return $this->render('commercial/new.html.twig', [
            'controller_name' => 'CommercialController',
        ]);
    }

    /**
     * @Route("/show", name="app_show")
     */
    public function show(): Response
    {
        return $this->render('commercial/show.html.twig', [
            'controller_name' => 'CommercialController',
        ]);
    }
}
