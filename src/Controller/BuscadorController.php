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
        
      
        
        $clase = $this->entityManager->getRepository(Clases::class)->find($id);
        $rasgos = $this->entityManager->getRepository(Habilidades::class)->findByOrigin('clases',$id);
        $tabla = $this->progreso($rasgos);
        
        return $this->render('buscador/claseok.html.twig', [
             'clase' => $clase, 'rasgos' => $rasgos, 'tabla' => $tabla
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
