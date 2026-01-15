<?php

namespace App\Controller;

use App\Entity\Category;
use App\Form\CategoryFormType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminController extends AbstractController
{


        #[Route('/admin/categories', name: 'app_categories')]
public function categories(ManagerRegistry $doctrine, Request $request): Response
{
    $category = new Category();
    $form = $this->createForm(CategoryFormType::class, $category);
    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {
        $category = $form->getData();    
        $entityManager = $doctrine->getManager();    
        $entityManager->persist($category);
        $entityManager->flush();
    }
    
    
    // --- NUEVA LÍNEA PARA RECUPERAR LA LISTA ---
    $categories = $doctrine->getRepository(Category::class)->findAll();

    return $this->render('admin/categories.html.twig', [
        'form' => $form->createView(),
        'categories' => $categories, // Pasamos la lista a Twig
    ]);
}





    #[Route('/admin/images', name: 'app_images')]
    public function images(): Response
    {
        return $this->render('admin/images.html.twig', []);
    }
}
