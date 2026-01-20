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

#[Route('/single_post/{slug}', name: 'single_post')]
public function post(ManagerRegistry $doctrine, $slug): Response
{
    $repositorio = $doctrine->getRepository(Post::class);
    $post = $repositorio->findOneBy(["slug"=>$slug]);
    return $this->render('blog/single_post.html.twig', [
        'post' => $post,
    ]);
}


 #[Route('/blog/new', name: 'new_post')]
    public function newPost(ManagerRegistry $doctrine, Request $request, SluggerInterface $slugger): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');

        $post = new Post();
        $form = $this->createForm(PostFormType::class, $post);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('image')->getData();

            if ($imageFile) {
                $newFilename = uniqid().'.'.$imageFile->guessExtension();
                try {
                    $imageFile->move(
                        $this->getParameter('images_directory'),
                        $newFilename
                    );
                    $post->setImage($newFilename); 
                } catch (FileException $e) {
                    // Manejar error
                }
                // ¡BORRA EL RETURN DE AQUÍ!
            }

            // 1. GENERAMOS EL SLUG (Esto es lo que faltaba para la ruta)
            $post->setSlug($slugger->slug($post->getTitle()));
            
            // 2. OTROS DATOS
            $post->setPostUser($this->getUser());
            $post->setNumLikes(0);
            $post->setNumComments(0);

            // 3. GUARDAMOS EN BASE DE DATOS
            $entityManager = $doctrine->getManager();    
            $entityManager->persist($post);
            $entityManager->flush();

            // 4. AHORA SÍ REDIRIGIMOS (Fuera del if de la imagen)
            return $this->redirectToRoute('single_post', ["slug" => $post->getSlug()]);
        }

        return $this->render('blog/new_post.html.twig', [
            'form' => $form->createView()    
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
