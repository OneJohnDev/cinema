<?php

namespace App\Controller;

use App\Entity\Genre;
use App\Form\GenreType;
use App\Form\GenreUpdateType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GenreController extends AbstractController
{
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    #[Route('/admin/genre', name: 'app_genre')]
    public function index(Request $request): Response
    {
        $all_genres= $this->entityManager->getRepository(Genre::class)->findAll();
        $genre = new Genre();
        $form = $this->createForm(GenreType::class, $genre);
        $form->handleRequest($request);
        

        if ($form->isSubmitted() && $form->isValid()) {
            // dump("hello");

            $genre = $form->getData();
            $this->entityManager->persist($genre);
            $this->entityManager->flush();
            
        }


        return $this->render('genre/index.html.twig', [
            'form' => $form->createView(),
            'all_genres' => $all_genres
        ]);
    }

    #[Route('/admin/genre_update/{id}', name: 'app_genre_update')]
    public function update(Request $request, $id): Response
    {
        $genre = $this->entityManager->getRepository(Genre::class)->findOneBy(['id'=>$id]);
        $form_update = $this->createForm(GenreUpdateType::class, $genre);
        $form_update->handleRequest($request);

        if ($form_update->isSubmitted() && $form_update->isValid()) {
            // dump("hello");

            $genre = $form_update->getData();
            $this->entityManager->flush();
            return $this->redirectToRoute('app_genre');
        }


        return $this->render('genre/update.html.twig', [
            'form_update' => $form_update->createView(),
        ]);
    }

    #[Route('/admin/genre_delete/{id}', name: 'app_genre_delete')]
    public function delete(Request $request, $id): Response
    {
        $genre = $this->entityManager->getRepository(Genre::class)->findOneBy(['id'=>$id]);
        $this->entityManager->remove($genre);
        $this->entityManager->flush();

        
            return $this->redirectToRoute('app_genre');
    }



    

}
