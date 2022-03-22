<?php

namespace App\Controller;

use App\Entity\Film;
use App\Entity\Genre;
use App\Entity\Realisateur;
use App\Form\FilmType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FilmController extends AbstractController
{
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/admin/film', name: 'app_film')]
    public function index(Request $request): Response
    {
        //$all_genres = $this->entityManager->getRepository(Genre::class)->findAll();
        //$all_realisateurs= $this->entityManager->getRepository(Realisateur::class)->findAll();
        $all_films = $this->entityManager->getRepository(Film::class)->findAll();
        $film = new Film();
        //form pour create
        $form = $this->createForm(FilmType::class, $film);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // dump("hello");
            $film = $form->getData();
            $this->entityManager->persist($film);
            $this->entityManager->flush();        
        }



        return $this->render('film/index.html.twig', [
            'form'=> $form->createView(),
            'all_films'=>$all_films,
            
            
        ]);
    }

    #[Route('/admin/film_update/{id}', name: 'app_film_update')]
    public function update(Request $request, $id): Response
    {
        $film = $this->entityManager->getRepository(Film::class)->findOneBy(['id'=>$id]);
        $form_update = $this->createForm(FilmType::class, $film);
        $form_update->handleRequest($request);

        if ($form_update->isSubmitted() && $form_update->isValid()) {
            $this->entityManager->flush();
            return $this->redirectToRoute('app_film');      
        }

        return $this->render('film/update.html.twig', [
            'form_update'=> $form_update->createView(),
            
            
            
        ]);
    }

    #[Route('/admin/film_delete/{id}', name: 'app_film_delete')]
    public function delete(Request $request, $id): Response
    {
        //A FAIRE : requête pour avoir les films dans l'ordre alphabétique
        $film = $this->entityManager->getRepository(Film::class)->findOneBy(['id'=>$id]);
        $this->entityManager->remove($film);
        $this->entityManager->flush();
        return $this->redirectToRoute('app_film');

        

        
    }
}
