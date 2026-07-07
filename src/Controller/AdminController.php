<?php

namespace App\Controller;

use App\Entity\Image;
use App\Entity\Category;
use App\Form\ImageFormType;
use App\Form\CategoryFormType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

class AdminController extends AbstractController
{

  #[Route('/admin/images', name: 'app_images')]
public function images(ManagerRegistry $doctrine, Request $request, SluggerInterface $slugger): Response
{
    $image = new Image();
    $form = $this->createForm(ImageFormType::class, $image);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $file = $form->get('file')->getData();
        if ($file) {
            $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFilename = $slugger->slug($originalFilename);
            $newFilename = $safeFilename.'-'.uniqid().'.'.$file->guessExtension();

            try {
                // 1. Mover al directorio de imágenes
                $file->move($this->getParameter('images_directory'), $newFilename);
                
                // 2. Duplicar en portfolio
                $filesystem = new \Symfony\Component\Filesystem\Filesystem();
                $filesystem->copy(
                    $this->getParameter('images_directory') . '/'. $newFilename, 
                    $this->getParameter('portfolio_directory') . '/'.  $newFilename, 
                    true
                );

                $image->setFile($newFilename);
            } catch (FileException $e) {
                // Manejar error si es necesario
            }
        }

        $entityManager = $doctrine->getManager();    
        $entityManager->persist($image);
        $entityManager->flush();

        // Redirigimos para limpiar el formulario tras guardar
        return $this->redirectToRoute('app_images');
    }

    // Buscamos las imágenes DESPUÉS del if para que siempre se ejecute
    $images = $doctrine->getRepository(Image::class)->findAll();

    // UN SOLO RETURN con todas las variables necesarias
    return $this->render('admin/images.html.twig', [
        'form' => $form->createView(),
        'images' => $images
    ]);
}
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
        
        $categories = $doctrine->getRepository(Category::class)->findAll();

        return $this->render('admin/categories.html.twig', [
            'form' => $form->createView(),
            'categories' => $categories,
        ]);
    }
}
