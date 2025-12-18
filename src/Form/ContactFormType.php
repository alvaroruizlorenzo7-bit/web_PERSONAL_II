<?php

namespace App\Form;

use App\Entity\Contact;
use Symfony\Flex\Response;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ContactFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('firstName')
            ->add('lastName')
            ->add('email')
            ->add('message')
            ->add('message')
            ->add('Send', SubmitType::class, array('label' => 'Send'));
        ;

    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
        ]);
    }
    public function contact(Request $request): Response
{
    // 1. Creas el formulario
    $form = $this->createForm(ContactType::class);

    // 2. IMPORTANTE: Pasas el formulario a la vista usando createView()
    return $this->render('page/contact.html.twig', [
        'form' => $form->createView(), // Esta es la variable que falta
    ]);
}
}
