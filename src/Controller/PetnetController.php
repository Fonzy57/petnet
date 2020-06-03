<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PetnetController extends AbstractController
{
    /**
     * @Route("/petnet", name="petnet")
     */
    /* public function index()
    {
        return $this->render('petnet/index.html.twig', [
            'controller_name' => 'PetnetController',
        ]);
    } */

    /**
     * @Route("/", name="home")
     */
    public function home() {
        return $this->render('petnet/home.html.twig', [
            'title' => 'Petnet',
        ]);
    }

    /**
     * @Route("/informations", name="informations")
     */
    public function informations(){
        return $this->render('petnet/informations.html.twig', [
            'title' => 'Informations',
        ]);
    }

    /**
     * @Route("/profil", name="profil")
     */
    public function profil(){
        return $this->render('petnet/profil.html.twig');
    }

}
