<?php

namespace App\Controller;

use App\Entity\Realisateur;
use App\Form\RealisateurDeleteType;
use App\Form\RealisateurType;
use App\Form\RealisateurUpdateType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RealisateurController extends AbstractController
{
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    #[Route('/admin/realisateur', name: 'app_realisateur')]
    public function index(Request $request): Response
    {
        $realisateur = new Realisateur();
        //form pour create
        $form = $this->createForm(RealisateurType::class, $realisateur);
        $form->handleRequest($request);
        
        
        
        //dump($form->getErrors());
        // if($form->isSubmitted()){
        //     dump($form->isValid());
        // }else{
        //    dump("not submited");
        // }
        //dump($form->isValid());
        
        if ($form->isSubmitted() && $form->isValid()) {
            // dump("hello");
            $realisateur = $form->getData();
            $this->entityManager->persist($realisateur);
            $this->entityManager->flush();        
        }

          

        

        $all_realisateurs= $this->entityManager->getRepository(Realisateur::class)->findAll();

        return $this->render('realisateur/index.html.twig', [
            'form' => $form->createView(),           
            'all_realisateurs'=> $all_realisateurs,
        ]);
    }


    #[Route('/admin/realisateur_update/{id}', name: 'app_realisateur_update')]
    public function update(Request $request, $id): Response
    {
        $realisateur = $this->entityManager->getRepository(Realisateur::class)->findOneBy(['id'=>$id]);
        //dump($realisateur);
        $form_update = $this->createForm(RealisateurUpdateType::class,$realisateur);
        $form_update->handleRequest($request);

        if ($form_update->isSubmitted() && $form_update->isValid()) {
            
            $this->entityManager->flush();
            return $this->redirectToRoute('app_realisateur');      
        }

        return $this->render('realisateur/update.html.twig',[
            'form_update'=> $form_update->createView(),
            'realisateur'=> $realisateur
        ]);
    }

    #[Route('/admin/realisateur_delete/{id}', name: 'app_realisateur_delete')]
    public function delete(Request $request, $id): Response
    {
        //récupération de l'objet réalisateur.
        $realisateur = $this->entityManager->getRepository(Realisateur::class)->findOneBy(['id'=>$id]);
        //dump($realisateur);
        $this->entityManager->remove($realisateur);
        $this->entityManager->flush();
        return $this->redirectToRoute('app_realisateur');
        
        


        

        // return $this->render('realisateur/delete.html.twig',[
        //     'realisateur'=> $realisateur
        // ]);
    }

}
