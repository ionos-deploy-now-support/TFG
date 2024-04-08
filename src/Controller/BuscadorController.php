<?php

namespace App\Controller;

use App\Entity\Clases;
use App\Form\ClasesType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class BuscadorController extends AbstractController
{
    private $entityManager;
    
    public function __construct( EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
       
    }

    #[Route('/buscador', name: 'app_buscador')]
    public function index(): Response
    {
        return $this->render('buscador/index.html.twig', [
            'controller_name' => 'BuscadorController',
        ]);
    }

    #[Route('/buscador_clase', name: 'app_buscador_clase')]
    public function gestionañadir( Request $request):Response
	{
        $autores = $this->entityManager->getRepository(Clases::class)->findUniqueAutores();
        
        $final = $this->mergeadordearrays($autores);
       
        $form = $this->createFormBuilder()
            ->add('Nombre', TextType::class, ['required' => false])
            ->add('Requisitos', TextType::class, ['required' => false])
            ->add('Competencias', TextType::class, ['required' => false])
            ->add('Salvaciones', TextType::class, ['required' => false])
            ->add('PuntosDeGolpe',ChoiceType::class, [
                'choices' => [
                    '1d4' => '1d4',
                    '1d6' => '1d6',
                    '1d8' => '1d8',
                    '1d10' => '1d10',
                    '1d12' => '1d12',
                ],
                'required' => false])
            ->add('Autor', ChoiceType::class, [
                'choices' => array_flip($final),
                'required' => false
            ])
            ->add('submit', SubmitType::class)
            ->getForm();

		$form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original $task variable has also been updated

            // ... perform some action, such as saving the task to the database
			
            $this->entityManager->flush();
            //return $this->redirectToRoute('gestionañadirok');
        }
		
		
        
		return $this->render( 'buscador/clases.html.twig', array('form' => $form));
	}

    private function mergeadordearrays($array){
        $final = [];    
        foreach($array as $a){
           
            array_push($final, $a['Autor']);
        }
        return $final;
    }
}
