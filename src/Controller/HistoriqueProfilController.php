<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HistoriqueProfilController extends AbstractController
{
    /**
     * @Route("/historique/profil", name="app_historique_profil")
     */
    public function index(): Response
    {
        return $this->render('historique_profil/index.html.twig', [
            'controller_name' => 'HistoriqueProfilController',
        ]);
    }
}
