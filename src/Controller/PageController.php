<?php

namespace App\Controller;

use App\Form\ContactFormType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

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
       // 2. Crea la instancia del formulario
        $form = $this->createForm(ContactFormType::class);

        // 3. Pasa el formulario a la vista
        return $this->render('page/contact.html.twig', [
            'form' => $form->createView(),
        ]);
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
