<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class SecurityController extends AbstractController
{
    /**
     * @Route("/inscription", name="security_registration")
     */
    public function registration(Request $request, EntityManagerInterface $manager, UserPasswordEncoderInterface $encoder){
        $user = new User();

        $form = $this->createForm(RegistrationType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $hash = $encoder->encodePassword($user, $user->getPassword());

            $user->setCreatedBy($user->getLastName())
                ->setCreatedAt(new \DateTime())
                ->setUpdatedBy($user->getLastName())
                ->setUpdatedAt(new \DateTime())
                ->setAccreditation(2)
                ->setPassword($hash);

            $manager->persist($user);
            $manager->flush();

            /* return $this->redirectToRoute('name de la route à rediriger') */
        }

        return $this->render('security/registration.html.twig', [
            'form' => $form->createView(),
            'title' => 'Inscription',
        ]);
    }

    /**
     * @Route("/connexion", name="security_login")
     */
    public function login(){

    }




}
