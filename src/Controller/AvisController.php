<?php

namespace App\Controller;

use App\Entity\AVIS;
use App\Form\AvisType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;

class AvisController extends AbstractController
{
    /**
     * @Route("/avis", name="app_avis")
     */
    public function avis(Request $request, EntityManagerInterface $entityManager) : Response
    {
        $avis = new AVIS();

        $formAvis = $this->createForm(AvisType::class, $avis);

        $formAvis->handleRequest($request);
        if ($formAvis->isSubmitted() && $formAvis->isValid()) {
            $entityManager->persist($avis);
            $entityManager->flush();

            $this->addFlash('success', 'Votre avis a bien été envoyé !');
            return $this->redirectToRoute('app_avis');
        }

        return $this->render('avis/index.html.twig', [
            'formAvis' => $formAvis->createView(),
        ]);
    }
}
