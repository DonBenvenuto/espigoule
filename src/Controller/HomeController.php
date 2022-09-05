<?php

namespace App\Controller;

use App\Entity\Clip;
use App\Repository\ClipRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /*#[Route('/home', name: 'app_home')]
    public function index(): Response
    {
        //Je mets dans une variable la liste de mes clips
        $clipsList = $Cli
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }*/


    /**
     * @Route("/home", name="main_home")
     */
    public function home(ClipRepository $clipRepository, Clip $clip = null)
    {
        // On va chercher les données
        $clipsList = $clipRepository->findAll();

        // On rend un template Twig à partir du dossier templates/
        // en lui donnant les données nécessaires
        return $this->render('home/index.html.twig', [
            // Variable Twig => variable PHP
            'clip' => $clip,
            'clipsList' => $clipsList,
        ]);
    }
}
