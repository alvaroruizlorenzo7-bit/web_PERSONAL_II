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
use Symfony\Component\HttpFoundation\File\Exception\FileException;

final class BlogController extends AbstractController
{




   #[Route('/blog/new', name: 'new_post')]
public function newPost(ManagerRegistry $doctrine, Request $request, SluggerInterface $slugger): Response
{
    // 1. Comprobar sesión
    $this->denyAccessUnlessGranted('ROLE_USER');

    $post = new Post();
    $form = $this->createForm(PostFormType::class, $post);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        /** @var UploadedFile $imageFile */
        $imageFile = $form->get('image')->getData();

        if ($imageFile) {
            // Creamos un nombre único para el archivo
            $newFilename = uniqid().'.'.$imageFile->guessExtension();

            // Movemos el archivo a la carpeta configurada
            try {
                $imageFile->move(
                    $this->getParameter('images_directory'),
                    $newFilename
                );
                // 2. INFORMAMOS EL CAMPO IMAGE CON EL NOMBRE DEL ARCHIVO
                $post->setImage($newFilename); 
            } catch (FileException $e) {
                // ... manejar error si falla la subida
            }
        }

        $post->setSlug($slugger->slug($post->getTitle()));
        $post->setPostUser($this->getUser());
        $post->setNumLikes(0);
        $post->setNumComments(0);

        $em = $doctrine->getManager();
        $em->persist($post);
        $em->flush(); // Ya no dará error porque 'image' ya tiene valor

        return $this->redirectToRoute('new_post'); // O a la lista de posts
    }

    return $this->render('blog/new_post.html.twig', [
        'form' => $form->createView(),
    ]);
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
