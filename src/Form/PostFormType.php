<?php

namespace App\Form;

use App\Entity\Post;
use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class PostFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('title', TextType::class, [
                'label' => 'Título',
                'required' => true, // Campo obligatorio
                'attr' => ['class' => 'form-control'] // Clase CSS
            ])
            ->add('content', TextareaType::class, [
                'label' => 'Contenido',
                'required' => true, // Campo obligatorio
                'attr' => ['class' => 'form-control', 'rows' => 5]
            ])
            ->add('image', FileType::class, [
                'label' => 'Imagen del post',
                'mapped' => false, // No se mapea directamente a la string de la entidad aún
                'required' => true, // Campo obligatorio
                'attr' => ['class' => 'form-control']
            ])
            ->add('Send', SubmitType::class, [
                'attr' => ['class' => 'btn btn-primary mt-3']
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Post::class,
        ]);
    }
}
