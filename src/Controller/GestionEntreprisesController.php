<?php

namespace App\Controller;

use App\Entity\Entreprises;
use App\Form\EntreprisesType;
use App\Repository\EntreprisesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/gestion/entreprises")
 */
class GestionEntreprisesController extends AbstractController
{
    /**
     * @Route("/", name="app_gestion_entreprises_index", methods={"GET"})
     */
    public function index(EntreprisesRepository $entreprisesRepository): Response
    {
        return $this->render('gestion_entreprises/index.html.twig', [
            'entreprises' => $entreprisesRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_gestion_entreprises_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntreprisesRepository $entreprisesRepository): Response
    {
        $entreprise = new Entreprises();
        $form = $this->createForm(EntreprisesType::class, $entreprise);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entreprisesRepository->add($entreprise, true);

            return $this->redirectToRoute('app_gestion_entreprises_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('gestion_entreprises/new.html.twig', [
            'entreprise' => $entreprise,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_gestion_entreprises_show", methods={"GET"})
     */
    public function show(Entreprises $entreprise): Response
    {
        return $this->render('gestion_entreprises/show.html.twig', [
            'entreprise' => $entreprise,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_gestion_entreprises_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Entreprises $entreprise, EntreprisesRepository $entreprisesRepository): Response
    {
        $form = $this->createForm(EntreprisesType::class, $entreprise);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entreprisesRepository->add($entreprise, true);

            return $this->redirectToRoute('app_gestion_entreprises_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('gestion_entreprises/edit.html.twig', [
            'entreprise' => $entreprise,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_gestion_entreprises_delete", methods={"POST"})
     */
    public function delete(Request $request, Entreprises $entreprise, EntreprisesRepository $entreprisesRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$entreprise->getId(), $request->request->get('_token'))) {
            $entreprisesRepository->remove($entreprise, true);
        }

        return $this->redirectToRoute('app_gestion_entreprises_index', [], Response::HTTP_SEE_OTHER);
    }
}
