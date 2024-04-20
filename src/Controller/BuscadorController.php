<?php

namespace App\Controller;

use App\Entity\Clases;
use App\Entity\Habilidades;
use App\Form\ClasesType;
use App\Repository\HabilidadesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;



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
    public function Buscador_Clases( Request $request):Response
	{
       
       
        $clase=new Clases();
		$form = $this->createForm(ClasesType::Class,$clase);
            
		$form->handleRequest($request);
       
        
        if ($form->isSubmitted() && $form->isValid()) {
            $clases = $form->getData();
            $sesion = $request->getSession();
            $sesion->set('clases', $clases);
            $sesion->set('prueba', "prueba");
           
            // $form->getData() holds the submitted values
            // but, the original $task variable has also been updated

            // ... perform some action, such as saving the task to the database
           
			
           
            $this->entityManager->flush();
            return $this->redirectToRoute('app_ok');
        }
		
		
        
		return $this->render( 'buscador/clases.html.twig', array('form' => $form));
	}

    
    #[Route("/ok", name:"app_ok")]
    public function gestioneditarok(Request $request):Response
    {
        // Crea una nueva instancia de Clases para el formulario
        $resultado = $request->getSession()->get('clases');
        
        $clases2 = $this->entityManager->getRepository(Clases::class)->FindFilter($resultado);
    
        
        // Crea el formulario de filtro
        
        
       
    
        // Renderiza el formulario de filtro si no se ha enviado o no es válido
        return $this->render('buscador/ok.html.twig', [
             'resultado' => $clases2
        ]);
    }


    #[Route("/clase/{id}", name:"app_clase")]
    public function clasesok(Request $request, $id):Response
    {
        // Crea una nueva instancia de Clases para el formulario
      
        
        $clase = $this->entityManager->getRepository(Clases::class)->find($id);
        $rasgos = $this->entityManager->getRepository(Habilidades::class)->findByOrigin('clases',$id);
        
        // Crea el formulario de filtro
        
        
       
    
        // Renderiza el formulario de filtro si no se ha enviado o no es válido
        return $this->render('buscador/claseok.html.twig', [
             'clase' => $clase, 'rasgos' => $rasgos
        ]);
    }

    


   

    private function mergeadordearrays($array){
        $final = [];    
        foreach($array as $a){
           
            array_push($final, $a['Autor']);
        }
        return $final;
    }
}
?>