<?php

namespace App\Form;

use App\Entity\Clases;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
class ClasesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('Nombre', null, ['required' => false])
        ->add('Requisitos', null, ['required' => false])
        ->add('Competencias', null, ['required' => false])
        ->add('Salvaciones', null, ['required' => false])
        ->add('PuntosDeGolpe', null, ['required' => false])
        ->add('Autor', null, ['required' => false])
        ->add('submit', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Clases::class,
        ]);
    }
}
