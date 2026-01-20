<?php

namespace App\Controller;

use App\Entity\Post;
use App\Form\PostFormType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

final class BlogController extends AbstractController
{




    #[Route('/blog/new', name: 'new_post')]
    public function newPost(ManagerRegistry $doctrine, Request $request, SluggerInterface $slugger): Response
    {
        $post = new Post();
        $form = $this->createForm(PostFormType::class, $post);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $post = $form->getData();   
            
            // Quitamos los caracteres especiales del título para crear el slug
            $post->setSlug($slugger->slug($post->getTitle()));
            
            // Guardamos el usuario que crea el post y los contadores a 0
            $post->setPostUser($this->getUser());
            $post->setNumLikes(0);
            $post->setNumComments(0);

            $entityManager = $doctrine->getManager();    
            $entityManager->persist($post);
            $entityManager->flush();
            return $this->render('blog/new_post.html.twig', array(
                'form' => $form->createView()    
            ));
        }
        return $this->render('blog/new_post.html.twig', array(
            'form' => $form->createView()    
        ));
    }





















 #[Route('/testimonial', name: 'testimonial')]
    public function testimonial(): Response
    {
        return $this->render('blog/testimonial.html.twig');
    }





  #[Route('/guide', name: 'guide')]
    public function guide(): Response
    {
        return $this->render('blog/guide.html.twig');
    }







  #[Route('/destination', name: 'destination')]
    public function estination(): Response
    {
        return $this->render('blog/destination.html.twig');
    }







    #[Route('/blog', name: 'blog')]
    public function blog(): Response
    {
        return $this->render('blog/blog.html.twig');
    }

    #[Route('/single', name: 'single')]
    public function singlePost(): Response
    {
        return $this->render('blog/single.html.twig', [
           
        ]);
    }
}
