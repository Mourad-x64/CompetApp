<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CollaborateurController extends AbstractController
{
    /**
     * @Route("/collaborateur", name="app_collaborateur")
     */
    public function index(): Response
    {
        return $this->render('collaborateur/index.html.twig', [
            'controller_name' => 'CollaborateurController',
        ]);
    }
}
