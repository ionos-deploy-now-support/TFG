<?php

namespace App\Controller;

use App\Entity\Clases;
use App\Entity\Dotes;
use App\Entity\Habilidades;
use App\Entity\Hechizos;
use App\Entity\Razas;
use App\Entity\Subclases;
use App\Entity\Subrazas;
use App\Entity\Trasfondo;
use App\Form\ClasesType;
use App\Form\ClasesType2;
use App\Form\DotesType;
use App\Form\DotesType2;
use App\Form\HechizosType;
use App\Form\HechizosType2;
use App\Form\RazasType;
use App\Form\RazasType2;
use App\Form\SubclasesType;
use App\Form\SubclasesType2;
use App\Form\SubrazasType;
use App\Form\SubrazasType2;
use App\Form\TrasfondoType;
use App\Form\TrasfondoType2;
use App\Repository\HabilidadesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;

class SolicitudesController extends AbstractController
{
    private $entityManager;
    
    public function __construct( EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
       
    }
    #[Route('/solicitudes', name: 'app_solicitudes')]
    public function index(): Response
    {
        
        return $this->render('solicitudes/index.html.twig', [
            'controller_name' => 'SolicitudesController',
        ]);
    }







    #[Route('/solicitud_clase', name: 'app_solicitud_clase')]
    public function Buscador_Clases( Request $request):Response
	{
       
        
        $clase=new Clases();
       
		$form = $this->createForm(ClasesType2::Class,$clase);
        
            
		$form->handleRequest($request);
       
       
        
        if ($form->isSubmitted() && $form->isValid()) {
            $clases = $form->getData();
            if ($clases->getAutor() == null){
                $clases->setAutor('Anónimo');
            }

            $clases->setValidado(false);
            $this->entityManager->persist($clases);
            $this->entityManager->flush();
            return $this->redirectToRoute('app_solicitud_ok');
        }


        
		
		
        
		return $this->render( 'solicitudes/clases.html.twig', array('form' => $form));
	}

    
    #[Route("/solicitud_ok", name:"app_solicitud_ok")]
    public function gestioneditarok(Request $request):Response
    {
        // Crea una nueva instancia de Clases para el formulario
       
    
        
        // Crea el formulario de filtro
        
        
       
    
        // Renderiza el formulario de filtro si no se ha enviado o no es válido
        return $this->render('solicitudes/solicitud_ok.html.twig', [ 
             
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

    #[Route('/buscador_subclase', name: 'app_buscador_subclase')]
    public function Buscador_Subclases( Request $request):Response
	{
       
       
       ;
        $subclase = new Subclases();
		
        $form2 = $this->createForm(SubclasesType2::Class,$subclase);
            
		
        $form2->handleRequest($request);
       
        
       

         if ($form2->isSubmitted() && $form2->isValid()) {
            $subclases = $form2->getData();
            $sesion = $request->getSession();
            $sesion->set('subclases', $subclases);
            $this->entityManager->flush();
            return $this->redirectToRoute('app_ok_subclases');
        }

        
		
		
        
		return $this->render( 'buscador/subclases.html.twig', array('form2' => $form2));
	}

     
    #[Route("/ok_subclases", name:"app_ok_subclases")]
    public function SubclasesOk(Request $request):Response
    {
        // Crea una nueva instancia de Clases para el formulario
        $resultado = $request->getSession()->get('subclases');
        
        $subclases = $this->entityManager->getRepository(Subclases::class)->FindFilter($resultado);
    
        
        // Crea el formulario de filtro
        
        
       
    
        // Renderiza el formulario de filtro si no se ha enviado o no es válido
        return $this->render('buscador/ok_subclases.html.twig', [
             'resultado' => $subclases
        ]);
    }

    #[Route("/subclase/{id}", name:"app_subclase")]
    public function subok(Request $request, $id):Response
    {
        
      
        
        $subclase = $this->entityManager->getRepository(Subclases::class)->find($id);
        
        return $this->render('buscador/subclaseok.html.twig', [
             'subclase' => $subclase
        ]);
    }

   

    

    #[Route('/buscador_razas', name: 'app_buscador_razas')]
    public function Buscador_Razas( Request $request):Response
	{
       
       
        $raza=new Razas();
		$form = $this->createForm(RazasType2::Class,$raza);
            
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

    #[Route('/buscador_subraza', name: 'app_buscador_subraza')]
    public function Buscador_Subrazas( Request $request):Response
	{
       
       
       ;
        $subraza = new Subrazas();
		
        $form2 = $this->createForm(SubrazasType2::Class,$subraza);
            
		
        $form2->handleRequest($request);
       
        
       

         if ($form2->isSubmitted() && $form2->isValid()) {
            $subrazas = $form2->getData();
            $sesion = $request->getSession();
            $sesion->set('subrazas', $subrazas);
            $this->entityManager->flush();
            return $this->redirectToRoute('app_ok_subrazas');
        }

        
		
		
        
		return $this->render( 'buscador/subrazas.html.twig', array('form2' => $form2));
	}

     
    #[Route("/ok_subrazas", name:"app_ok_subrazas")]
    public function SubrazasOK(Request $request):Response
    {
        // Crea una nueva instancia de Clases para el formulario
        $resultado = $request->getSession()->get('subrazas');
        
        $subrazas = $this->entityManager->getRepository(Subrazas::class)->FindFilter($resultado);
    
        
        // Crea el formulario de filtro
        
        
       
    
        // Renderiza el formulario de filtro si no se ha enviado o no es válido
        return $this->render('buscador/ok_subrazas.html.twig', [
             'resultado' => $subrazas
        ]);
    }

    #[Route("/subraza/{id}", name:"app_subraza")]
    public function subzara(Request $request, $id):Response
    {
        
      
        
        $subraza = $this->entityManager->getRepository(Subrazas::class)->find($id);
        
        return $this->render('buscador/subrazaok.html.twig', [
             'subraza' => $subraza
        ]);
    }

    #[Route('/buscador_trasfondo', name: 'app_buscador_trasfondo')]
    public function Buscador_Trasfondos( Request $request):Response
	{
       
       
        $trasfondo=new Trasfondo();
		$form = $this->createForm(TrasfondoType2::Class,$trasfondo);
            
		$form->handleRequest($request);
       
        
        if ($form->isSubmitted() && $form->isValid()) {
            $trasfondos = $form->getData();
            $sesion = $request->getSession();
            $sesion->set('trasfondos', $trasfondos);
           
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
		$form = $this->createForm(DotesType2::Class,$dote);
            
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
		$form = $this->createForm(HechizosType2::Class,$trasfondo);
            
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

