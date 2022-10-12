<?php

namespace App\Controller;

use App\Entity\PRESTATION;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PrestationController extends AbstractController
{
    /**
     * @Route("/prestation", name="app_prestation")
     */
    public function prestation(): Response
    {

        $getPresta = $this->getDoctrine()->getRepository(PRESTATION::class)->findAll();

        return $this->render('prestation/index.html.twig', [
            'getPresta' => $getPresta,
        ]);
    }
}
