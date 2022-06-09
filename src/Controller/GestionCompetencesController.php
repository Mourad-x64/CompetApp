<?php

namespace App\Controller;

use App\Entity\Competences;
use App\Form\CompetencesType;
use App\Repository\CompetencesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/gestion/competences")
 */
class GestionCompetencesController extends AbstractController
{
    /**
     * @Route("/", name="app_gestion_competences_index", methods={"GET"})
     */
    public function index(CompetencesRepository $competencesRepository): Response
    {
        return $this->render('gestion_competences/index.html.twig', [
            'competences' => $competencesRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_gestion_competences_new", methods={"GET", "POST"})
     */
    public function new(Request $request, CompetencesRepository $competencesRepository): Response
    {
        $competence = new Competences();
        $form = $this->createForm(CompetencesType::class, $competence);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $competencesRepository->add($competence, true);

            return $this->redirectToRoute('app_gestion_competences_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('gestion_competences/new.html.twig', [
            'competence' => $competence,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_gestion_competences_show", methods={"GET"})
     */
    public function show(Competences $competence): Response
    {
        return $this->render('gestion_competences/show.html.twig', [
            'competence' => $competence,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_gestion_competences_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Competences $competence, CompetencesRepository $competencesRepository): Response
    {
        $form = $this->createForm(CompetencesType::class, $competence);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $competencesRepository->add($competence, true);

            return $this->redirectToRoute('app_gestion_competences_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('gestion_competences/edit.html.twig', [
            'competence' => $competence,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_gestion_competences_delete", methods={"POST"})
     */
    public function delete(Request $request, Competences $competence, CompetencesRepository $competencesRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$competence->getId(), $request->request->get('_token'))) {
            $competencesRepository->remove($competence, true);
        }

        return $this->redirectToRoute('app_gestion_competences_index', [], Response::HTTP_SEE_OTHER);
    }
}
