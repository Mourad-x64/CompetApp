<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProfilCompetencesController extends AbstractController
{
    /**
     * @Route("/profil/competences", name="app_profil_competences")
     */
    public function index(): Response
    {
        return $this->render('profil_competences/index.html.twig', [
            'controller_name' => 'ProfilCompetencesController',
        ]);
    }
}
