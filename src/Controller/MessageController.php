<?php

namespace App\Controller;

use App\Entity\Message;
use App\Form\MessageType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;

class MessageController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function message(Request $request, EntityManagerInterface $manager, UserInterface $user){
        $message = new Message();

        $form = $this->createForm(MessageType::class, $message);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $message->setSender($user->getUsername())
                    ->setDateDemande(new \DateTime())
                    ->setUserIduser($user);
                    

            $manager->persist($message);
            $manager->flush();

            return $this->redirectToRoute('profil');
        }


        return $this->render('message/contact.html.twig', [
            'form' => $form->createView()
        ]);
    }
}