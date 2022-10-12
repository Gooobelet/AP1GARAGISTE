<?php

namespace App\Controller;

use App\Entity\UTILISATEUR;
use App\Form\UserType;
use App\Form\ConnexionType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;

class ConnexionController extends AbstractController
{
    /**
     * @Route("/connexion", name="app_connexion")
     */
    public function connexion(Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = new UTILISATEUR();

        $userCo = new UTILISATEUR();

        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        $formCo = $this->createForm(ConnexionType::class, $userCo);
        $formCo->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()){
            $entityManager->persist($user);
            $entityManager->flush();
        }

        if ($formCo->isSubmitted() && $formCo->isValid()){
            
            $findUser = $this->getDoctrine()->getRepository(UTILISATEUR::class)->findAll();

            foreach($findUser as $oneUser){
                if($oneUser->getLogin() == $formCo->get('login')->getData() && $oneUser->getMdp() == $formCo->get('mdp')->getData()){
                    if($oneUser->isAdmin()){
                        $this->get('session')->set('ADMIN', 1);
                        break;
                    }
                }
            }
        }

        return $this->render('connexion/index.html.twig', array(
            'form' => $form->createView(),
            'formCo' => $formCo->createView()
        ));
    }
}
