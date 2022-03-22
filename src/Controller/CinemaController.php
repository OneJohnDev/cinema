<?php

namespace App\Controller;

use App\Entity\Film;
use App\Entity\Realisateur;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CinemaController extends AbstractController
{
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/cinema', name: 'app_cinema')]
    public function index(): Response
    {

        $all_films= $this->entityManager->getRepository(Film::class)->findBy(array(), array('titre_film' => 'ASC'));
        //dump($all_films);
        return $this->render('cinema/index.html.twig',[
            'all_films'=> $all_films
        ]);
    }


    #[Route('/cinema/realisateurs', name: 'app_cinema_liste_realisateurs')]
    public function cinema_list_realisateur(): Response
    {
        $realisateurs = $this->entityManager->getRepository(Realisateur::class)->findBy(array(), array('nom_realisateur' => 'ASC'));

        
        
        
        
        return $this->render('cinema/realisateurs.html.twig',[
            'realisateurs'=>$realisateurs
        ]);
    }

    #[Route('/cinema/{id}', name: 'app_cinema_realisateur')]
    public function cinema_realisateur($id): Response
    {
        // récupérer un réalisateur et afficher la liste des films ou récupérer la liste des films dont l'id du réalisateur est x ?
        //methode 1 
        $realisateur = $this->entityManager->getRepository(Realisateur::class)->findOneBy(['id'=>$id]);
        //dump($realisateur->getFilms());
        // methode 2
        $films = $this->entityManager->getRepository(Film::class)->findBy(['Realisateur'=>$realisateur]);


        return $this->render('cinema/films_realisateur.html.twig',[
            'all_films'=> $films,
            'realisateur'=>$realisateur,
            
        ]);
    }

}
