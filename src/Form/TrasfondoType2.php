<?php

namespace App\Form;

use App\Entity\Trasfondo;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use App\Controller\BuscadorController;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Doctrine\ORM\EntityManagerInterface;

class TrasfondoType2 extends AbstractType
{
    private $entityManager;
    

    public function __construct( EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
       
    }
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
       
        $autores = $this->entityManager->getRepository(Trasfondo::class)->findUniqueAutores();
        $final = $this->mergeadordearrays($autores);
        $builder
        ->add('Nombre', TextType::class,)
        ->add('Origen', ChoiceType::class, [
            'choices' => [
                'Ocupación' => 0,
                'Origen' => 1,
                        ],
           
        ])
        ->add('Idiomas', ChoiceType::class, [
            'choices' => [
                
                'Común' => 'Común',
                'Orsfon' => 'Orsfon',
                'Élfico' => 'Élfico',
                'Hanafu' => 'Hanafu',
                'Ormius' => 'Ormius',
                'Draconido' => 'Draconido',
                'Trasgo' => 'Trasgo',
                'Nooru' => 'Nooru',
                ],
                
            'required' => false
        ])
        ->add('ObjetosIniciales', TextType::class, )
        ->add('Competencias', TextType::class,)
           
        ->add('Autor', ChoiceType::class, [
            'choices' => $final,
           
        ])
            ->add('Plano', ChoiceType::class, [
                'choices' => [
                    
                    'Ninguno' => '0',
                    'Synfol' => 'Synfol',
                    ],
                    
               
            ])
            ->add('Enviar', SubmitType::class)
        ;
    }

    private function mergeadordearrays($array){
        $final = [];    
        foreach($array as $a){
            $final[$a['Autor']] = $a['Autor'];
        }
        return $final;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Trasfondo::class,
        ]);
    }
}

