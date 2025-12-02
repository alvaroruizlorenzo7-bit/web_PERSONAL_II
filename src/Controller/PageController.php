<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class PageController extends AbstractController
{


    #[Route('/package', name: 'package')]
    public function package(): Response
    {
        return $this->render('page/package.html.twig');
    }





       #[Route('/services', name: 'services')]
    public function services(): Response
    {
        return $this->render('page/services.html.twig');
    }



        #[Route('/contact', name: 'contact')]
    public function contact(): Response
    {
        return $this->render('page/contact.html.twig');
    }


#[Route('/about', name: 'about')]
public function about(): Response
{
    return $this->render('page/about.html.twig', []);
}
    #[Route('', name: 'index')]
    public function index(): Response
    {
        return $this->render('page/index.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }
}
