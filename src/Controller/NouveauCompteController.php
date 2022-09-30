<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NouveauCompteController extends AbstractController
{
    /**
     * @Route("/nouveau/compte", name="app_nouveau_compte")
     */
    public function nouveaucompte(): Response
    {
        return $this->render('nouveau_compte/index.html.twig', [
            'controller_name' => 'NouveauCompteController',
        ]);
    }
}
