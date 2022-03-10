<?php

namespace App\Controller;

use App\Entity\Realisateur;
use App\Form\RealisateurType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RealisateurController extends AbstractController
{
    #[Route('/test', name: 'app_realisateur')]
    public function index(): Response
    {
        $realisateur = new Realisateur();
        $form = $this->createForm(RealisateurType::class,$realisateur);
        return $this->render('realisateur/index.html.twig',[
            'form'=>$form->createView()
        ]);
    }
}
