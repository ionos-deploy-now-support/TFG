<?php

namespace App\Controller;

use App\Entity\Clases;
use App\Entity\Dotes;
use App\Entity\Habilidades;
use App\Entity\Hechizos;
use App\Entity\Razas;
use App\Entity\Trasfondo;
use App\Form\ClasesType;
use App\Form\DotesType;
use App\Form\HechizosType;
use App\Form\RazasType;
use App\Form\TrasfondoType;
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
        
      
        
        $clase = $this->entityManager->getRepository(Clases::class)->find($id);
        $rasgos = $this->entityManager->getRepository(Habilidades::class)->findByOrigin('clases',$id);
        $tabla = $this->progreso($rasgos);
        
        return $this->render('buscador/claseok.html.twig', [
             'clase' => $clase, 'rasgos' => $rasgos, 'tabla' => $tabla
        ]);
    }

    #[Route('/buscador_razas', name: 'app_buscador_razas')]
    public function Buscador_Razas( Request $request):Response
	{
       
       
        $raza=new Razas();
		$form = $this->createForm(RazasType::Class,$raza);
            
		$form->handleRequest($request);
       
        
        if ($form->isSubmitted() && $form->isValid()) {
            $razas = $form->getData();
            $sesion = $request->getSession();
            $sesion->set('razas', $razas);
            $sesion->set('prueba', "prueba");
           
            // $form->getData() holds the submitted values
            // but, the original $task variable has also been updated

            // ... perform some action, such as saving the task to the database
           
			
           
            $this->entityManager->flush();
            return $this->redirectToRoute('app_razas_ok');
        }
		
		
        
		return $this->render( 'buscador/razas.html.twig', array('form' => $form));
	}

    #[Route("/razas_ok", name:"app_razas_ok")]
    public function Razas_Ok(Request $request):Response
    {
        // Crea una nueva instancia de Clases para el formulario
        $resultado = $request->getSession()->get('razas');
        
        $clases2 = $this->entityManager->getRepository(Razas::class)->FindFilter($resultado);
    
        
        // Crea el formulario de filtro
        
        
       
    
        // Renderiza el formulario de filtro si no se ha enviado o no es válido
        return $this->render('buscador/ok_razas.html.twig', [
             'resultado' => $clases2
        ]);
    }

    #[Route("/raza/{id}", name:"app_raza")]
    public function razasok(Request $request, $id):Response
    {
        
      
        
        $raza = $this->entityManager->getRepository(Razas::class)->find($id);
       
        
        return $this->render('buscador/razaok.html.twig', [
             'raza' => $raza
        ]);
    }

    #[Route('/buscador_trasfondo', name: 'app_buscador_trasfondo')]
    public function Buscador_Trasfondos( Request $request):Response
	{
       
       
        $trasfondo=new Trasfondo();
		$form = $this->createForm(TrasfondoType::Class,$trasfondo);
            
		$form->handleRequest($request);
       
        
        if ($form->isSubmitted() && $form->isValid()) {
            $trasfondos = $form->getData();
            $sesion = $request->getSession();
            $sesion->set('trasfondos', $trasfondos);
            $sesion->set('prueba', "prueba");
           
            // $form->getData() holds the submitted values
            // but, the original $task variable has also been updated

            // ... perform some action, such as saving the task to the database
           
			
           
            $this->entityManager->flush();
            return $this->redirectToRoute('app_ok_trasfondos');
        }
		
		
        
		return $this->render( 'buscador/trasfondos.html.twig', array('form' => $form));
	}

    #[Route("/ok_trasfondos", name:"app_ok_trasfondos")]
    public function Trasfondos_Ok(Request $request):Response
    {
        // Crea una nueva instancia de Clases para el formulario
        $resultado = $request->getSession()->get('trasfondos');
        
        $clases2 = $this->entityManager->getRepository(Trasfondo::class)->FindFilter($resultado);
    
        
        // Crea el formulario de filtro
        
        
       
    
        // Renderiza el formulario de filtro si no se ha enviado o no es válido
        return $this->render('buscador/ok_trasfondos.html.twig', [
             'resultado' => $clases2
        ]);
    }

    #[Route("/trasfondo/{id}", name:"app_trasfondo")]
    public function trasfondook(Request $request, $id):Response
    {
        
      
        
        $trasfondo = $this->entityManager->getRepository(Trasfondo::class)->find($id);
       
        
        return $this->render('buscador/trasfondook.html.twig', [
             'trasfondo' => $trasfondo
        ]);
    }

    #[Route('/buscador_dotes', name: 'app_buscador_dotes')]
    public function Buscador_Dotes( Request $request):Response
	{
       
       
        $dote=new Dotes();
		$form = $this->createForm(DotesType::Class,$dote);
            
		$form->handleRequest($request);
       
        
        if ($form->isSubmitted() && $form->isValid()) {
            $dotes = $form->getData();
            $sesion = $request->getSession();
            $sesion->set('dotes', $dotes);
            $sesion->set('prueba', "prueba");
           
            // $form->getData() holds the submitted values
            // but, the original $task variable has also been updated

            // ... perform some action, such as saving the task to the database
           
			
           
            $this->entityManager->flush();
            return $this->redirectToRoute('app_ok_dotes');
        }
		
		
        
		return $this->render( 'buscador/dotes.html.twig', array('form' => $form));
	}

    #[Route("/ok_dotes", name:"app_ok_dotes")]
    public function Dotes_Ok(Request $request):Response
    {
        // Crea una nueva instancia de Clases para el formulario
        $resultado = $request->getSession()->get('dotes');
        
        $dotes = $this->entityManager->getRepository(Dotes::class)->FindFilter($resultado);
    
        
        // Crea el formulario de filtro
        
        
       
    
        // Renderiza el formulario de filtro si no se ha enviado o no es válido
        return $this->render('buscador/ok_dotes.html.twig', [
             'resultado' => $dotes
        ]);
    }

    #[Route("/dote/{id}", name:"app_dote")]
    public function doteok(Request $request, $id):Response
    {
        
      
        
        $dote = $this->entityManager->getRepository(Dotes::class)->find($id);
       
        
        return $this->render('buscador/doteok.html.twig', [
             'dote' => $dote
        ]);
    }

    #[Route('/buscador_hechizos', name: 'app_buscador_hechizos')]
    public function Buscador_Hechizos( Request $request):Response
	{
       
       
        $trasfondo=new Hechizos();
		$form = $this->createForm(HechizosType::Class,$trasfondo);
            
		$form->handleRequest($request);
       
        
        if ($form->isSubmitted() && $form->isValid()) {
            $hechizos = $form->getData();
            $sesion = $request->getSession();
            $sesion->set('hechizos', $hechizos);
            $sesion->set('prueba', "prueba");
           
            // $form->getData() holds the submitted values
            // but, the original $task variable has also been updated

            // ... perform some action, such as saving the task to the database
           
			
           
            $this->entityManager->flush();
            return $this->redirectToRoute('app_ok_hechizos');
        }
		
		
        
		return $this->render( 'buscador/hechizos.html.twig', array('form' => $form));
	}

    #[Route("/ok_hechizos", name:"app_ok_hechizos")]
    public function Hechizos_Ok(Request $request):Response
    {
        // Crea una nueva instancia de Clases para el formulario
        $resultado = $request->getSession()->get('hechizos');
        
        $clases2 = $this->entityManager->getRepository(Hechizos::class)->FindFilter($resultado);
    
        
        // Crea el formulario de filtro
        
        
       
    
        // Renderiza el formulario de filtro si no se ha enviado o no es válido
        return $this->render('buscador/ok_hechizos.html.twig', [
             'resultado' => $clases2
        ]);
    }

    #[Route("/hechizo/{id}", name:"app_hechizo")]
    public function hechizook(Request $request, $id):Response
    {
        
      
        
        $hechizo = $this->entityManager->getRepository(Hechizos::class)->find($id);
       
        
        return $this->render('buscador/hechizook.html.twig', [
             'hechizo' => $hechizo
        ]);
    }

    


    private function progreso($rasgos){
        $final = [];
        for ($i = 1; $i <= 20; $i++){
            $linea = [$i,$this->competencia($i),$this->mejoras_final($rasgos,$i)];
            $final[$i-1] = $linea;
        }
        return $final;
    }

    private function mejoras_final($rasgos, $i){
        if ($this->habilidades($rasgos,$i) == '' && $this->evoluciones($rasgos,$i) == ''){
            return '';
        }

        else if ($this->habilidades($rasgos,$i) == '' &&  $this->evoluciones($rasgos,$i) != ''){
            return $this->evoluciones($rasgos,$i);
        }

        else if ($this->habilidades($rasgos,$i) != '' &&  $this->evoluciones($rasgos,$i) == ''){
            return $this->habilidades($rasgos,$i);
        }

        else{
            return $this->habilidades($rasgos,$i) . ', ' . $this->evoluciones($rasgos,$i);


    }
}

    





    private function habilidades($rasgos,$i){
        $final = '';
        foreach($rasgos as $r){
            if ($r->getOrigenNivel() == $i){
                $final = $final . $r->getNombre() . ', ';
            }
        }
        $final = substr($final,0, -2);
        return $final;
    }


    private function evoluciones($rasgos, $i){
        $final = '';
        foreach($rasgos as $r){
            if (str_contains($r->getDescripción(), '{' . $i . '}')){
                $final = $final . $r->getNombre() . ' (Mejora), ';
            }
        }
        $final = substr($final,0, -2);
        return $final;
    }

    private function competencia($nivel){
        switch ($nivel):
            case 1:
                return '+2';
            case 2:
                return '+2';
            case 3:
                return '+2';
            case 4:
                return '+2';
            case 5:
                return '+3';
            case 6:
                return '+3';
            case 7:
                return '+3';
            case 8:
                return '+3';
            case 9:
                return '+4';
            case 10:
                return '+4';
            case 11:
                return '+4';
            case 12:
                return '+4';
            case 13:
                return '+5';
            case 14:
                return '+5';
            case 15:
                return '+5';
            case 16:
                return '+5';
            case 17:
                return '+6';
            case 18:
                return '+6';
            case 19:
                return '+6';
            case 20:
                return '+6';
        endswitch;
    }
   

    private function mergeadordearrays($array){
        $final = [];    
        foreach($array as $a){
           
            array_push($final, $a['Autor']);
        }
        return $final;
    }
}
