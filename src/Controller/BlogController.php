<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class BlogController extends AbstractController
{

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
