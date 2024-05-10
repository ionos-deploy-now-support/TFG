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


    #[Route('/revisiones', name: 'app_revisiones')]
    public function revisiones(): Response
    {
        
        return $this->render('revisiones/index.html.twig', [
            'controller_name' => 'SolicitudesController',
        ]);
    }


    #[Route('/revisiones_clase', name: 'app_revisiones_clase')]
    public function revisiones_clase(): Response
    {
        $revisiones = $this->entityManager->getRepository(Clases::class)->FindNonValidated();
        return $this->render('revisiones/revisiones_clase.html.twig', [
            'revisiones' => $revisiones,
        ]);
    }


    #[Route('/solicitud_clase', name: 'app_solicitud_clase')]
    public function Buscador_Clases( Request $request):Response
	{
       $ipAddress = $request->getClientIp();
       $currentDate = new \DateTime();
      

       $count = $this->entityManager->getRepository(Clases::class)->count([
           'ipAddress' => $ipAddress,
           'createdAt' => $currentDate
         ]);

            if ($count >= 2){
                $this->addFlash('error', 'Has superado el límite de solicitudes por IP');
                return $this->redirectToRoute('app_index');
            }
        
        $clase=new Clases();
       
		$form = $this->createForm(ClasesType2::Class,$clase);
        
            
		$form->handleRequest($request);
       
       
        
        if ($form->isSubmitted() && $form->isValid()) {
            $clases = $form->getData();
            if ($clases->getAutor() == null){
                $clases->setAutor('Anónimo');
            }

            $clases->setIpAddress($ipAddress);

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


    #[Route("/solicitud_clase/{id}", name:"app_comprobar_clase")]
    public function clasesok(Request $request, $id):Response
    {
        
      
        
        $clase = $this->entityManager->getRepository(Clases::class)->FindNonValidatedById($id);
       
        
        return $this->render('revisiones/revision_clase.html.twig', [
             'clase' => $clase,
        ]);
    }

   

    #[Route("/validar_clase/{id}", name:"app_validar_clase")]
    public function validarClase($id)
{
    $clase = $this->entityManager->getRepository(Clases::class)->find($id);


    $clase->setValidado(1);
    $this->entityManager->flush();

    return $this->redirectToRoute('app_revisiones_clase');
}

#[Route("/eliminar_clase/{id}", name:"app_eliminar_clase")]
public function eliminarClase($id)
{
    $clase = $this->entityManager->getRepository(Clases::class)->find($id);


    $this->entityManager->remove($clase);
    $this->entityManager->flush();

    return $this->redirectToRoute('app_revisiones_clase');
}

#[Route('/revisiones_subclase', name: 'app_revisiones_subclase')]
public function revisiones_subclase(): Response
{
    $revisiones = $this->entityManager->getRepository(Subclases::class)->FindNonValidated();
    return $this->render('revisiones/revisiones_subclase.html.twig', [
        'revisiones' => $revisiones,
    ]);
}

#[Route('/solicitudes_subclase', name: 'app_solicitudes_subclase')]
public function Buscador_Subclases( Request $request):Response
{
   
    
    $subclase=new Subclases();
   
    $form = $this->createForm(SubclasesType2::Class,$subclase);
    
        
    $form->handleRequest($request);
   
   
    
    if ($form->isSubmitted() && $form->isValid()) {
        $subclases = $form->getData();
        if ($subclases->getAutor() == null){
            $subclases->setAutor('Anónimo');
        }

        $subclases->setValidado(false);
        $this->entityManager->persist($subclases);
        $this->entityManager->flush();
        return $this->redirectToRoute('app_solicitud_ok');
    }
    
    
    return $this->render( 'solicitudes/subclases.html.twig', array('form' => $form));
}

     
#[Route("/solicitud_subclase/{id}", name:"app_comprobar_subclase")]
public function subclaseok(Request $request, $id):Response
{
    
  
    
    $subclase = $this->entityManager->getRepository(Subclases::class)->FindNonValidatedById($id);
   
    
    return $this->render('revisiones/revision_subclase.html.twig', [
         'subclase' => $subclase,
    ]);
}

#[Route("/validar_subclase/{id}", name:"app_validar_subclase")]
public function validarSubclase($id)
{
$subclase = $this->entityManager->getRepository(Subclases::class)->find($id);


$subclase->setValidado(1);
$this->entityManager->flush();

return $this->redirectToRoute('app_revisiones_subclase');
}

#[Route("/eliminar_subclase/{id}", name:"app_eliminar_subclase")]
public function eliminarSubclase($id)
{
$clase = $this->entityManager->getRepository(Subclases::class)->find($id);


$this->entityManager->remove($clase);
$this->entityManager->flush();

return $this->redirectToRoute('app_revisiones_subclase');
}





#[Route('/solicitud_raza', name: 'app_solicitud_raza')]
    public function Solicitudes_Razas( Request $request):Response
	{
       
        
        $raza=new Razas();
       
		$form = $this->createForm(RazasType2::Class,$raza);
        
            
		$form->handleRequest($request);
       
       
        
        if ($form->isSubmitted() && $form->isValid()) {
            $razas = $form->getData();
            if ($razas->getAutor() == null){
                $razas->setAutor('Anónimo');
            }

            $razas->setValidado(false);
            $this->entityManager->persist($razas);
            $this->entityManager->flush();
            return $this->redirectToRoute('app_solicitud_ok');
        }
        
		return $this->render( 'solicitudes/razas.html.twig', array('form' => $form));
	}

    #[Route('/revisiones_razas', name: 'app_revisiones_raza')]
public function revisiones_razas(): Response
{
    $revisiones = $this->entityManager->getRepository(Razas::class)->FindNonValidated();
    return $this->render('revisiones/revisiones_raza.html.twig', [
        'revisiones' => $revisiones,
    ]);
}

#[Route("/solicitud_raza/{id}", name:"app_comprobar_raza")]
public function razaok(Request $request, $id):Response
{
    
  
    
    $raza = $this->entityManager->getRepository(Razas::class)->FindNonValidatedById($id);
   
    
    return $this->render('revisiones/revision_raza.html.twig', [
         'raza' => $raza,
    ]);
}

#[Route("/validar_raza/{id}", name:"app_validar_raza")]
public function validarRazas($id)
{
$raza = $this->entityManager->getRepository(Razas::class)->find($id);


$raza->setValidado(1);
$this->entityManager->flush();

return $this->redirectToRoute('app_revisiones_raza');
}

#[Route("/eliminar_raza/{id}", name:"app_eliminar_raza")]
public function eliminarRaza($id)
{
$raza = $this->entityManager->getRepository(Razas::class)->find($id);


$this->entityManager->remove($raza);
$this->entityManager->flush();

return $this->redirectToRoute('app_revisiones_raza');
}

#[Route('/solicitud_subraza', name: 'app_solicitud_subraza')]
    public function Solicitudes_Subrazas( Request $request):Response
	{
       
        
        $subraza=new Subrazas();
       
		$form = $this->createForm(SubrazasType2::Class,$subraza);
        
            
		$form->handleRequest($request);
       
       
        
        if ($form->isSubmitted() && $form->isValid()) {
            $subrazas = $form->getData();
            if ($subrazas->getAutor() == null){
                $subrazas->setAutor('Anónimo');
            }

            $subrazas->setValidado(false);
            $this->entityManager->persist($subrazas);
            $this->entityManager->flush();
            return $this->redirectToRoute('app_solicitud_ok');
        }
        
		return $this->render( 'solicitudes/subrazas.html.twig', array('form' => $form));
	}

    #[Route('/revisiones_subrazas', name: 'app_revisiones_subraza')]
public function revisiones_subrazas(): Response
{
    $revisiones = $this->entityManager->getRepository(Subrazas::class)->FindNonValidated();
    return $this->render('revisiones/revisiones_subraza.html.twig', [
        'revisiones' => $revisiones,
    ]);
}

#[Route("/solicitud_subraza/{id}", name:"app_comprobar_subraza")]
public function subrazaok(Request $request, $id):Response
{
    
  
    
    $subraza = $this->entityManager->getRepository(Subrazas::class)->FindNonValidatedById($id);
   
    
    return $this->render('revisiones/revision_subraza.html.twig', [
         'subraza' => $subraza,
    ]);
}

#[Route("/validar_subraza/{id}", name:"app_validar_subraza")]
public function validarSubrazas($id)
{
$subraza = $this->entityManager->getRepository(Subrazas::class)->find($id);


$subraza->setValidado(1);
$this->entityManager->flush();

return $this->redirectToRoute('app_revisiones_subraza');
}

#[Route("/eliminar_subraza/{id}", name:"app_eliminar_subraza")]
public function eliminarSubraza($id)
{
$subraza = $this->entityManager->getRepository(Subrazas::class)->find($id);


$this->entityManager->remove($subraza);
$this->entityManager->flush();

return $this->redirectToRoute('app_revisiones_subraza');
}

#[Route('/solicitud_trasfondos', name: 'app_solicitud_trasfondos')]
    public function Solicitudes_Trasfondos( Request $request):Response
	{
       
        
        $trasfondo=new Trasfondo();
       
		$form = $this->createForm(TrasfondoType2::Class,$trasfondo);
        
            
		$form->handleRequest($request);
       
       
        
        if ($form->isSubmitted() && $form->isValid()) {
            $trasfondos = $form->getData();
            if ($trasfondos->getAutor() == null){
                $trasfondos->setAutor('Anónimo');
            }

            $trasfondos->setValidado(false);
            $this->entityManager->persist($trasfondos);
            $this->entityManager->flush();
            return $this->redirectToRoute('app_solicitud_ok');
        }
        
		return $this->render( 'solicitudes/trasfondos.html.twig', array('form' => $form));
	}

    #[Route('/revisiones_trasfondos', name: 'app_revisiones_trasfondo')]
public function revisiones_trasfondos(): Response
{
    $revisiones = $this->entityManager->getRepository(Trasfondo::class)->FindNonValidated();
    return $this->render('revisiones/revisiones_trasfondo.html.twig', [
        'revisiones' => $revisiones,
    ]);
}

#[Route("/solicitud_trasfondo/{id}", name:"app_comprobar_trasfondo")]
public function trasfondook(Request $request, $id):Response
{
    
  
    
    $trasfondo = $this->entityManager->getRepository(Trasfondo::class)->FindNonValidatedById($id);
   
    
    return $this->render('revisiones/revision_trasfondo.html.twig', [
         'trasfondo' => $trasfondo,
    ]);
}

#[Route("/validar_trasfondo/{id}", name:"app_validar_trasfondo")]
public function validarTrasfondos($id)
{
$trasfondo = $this->entityManager->getRepository(Trasfondo::class)->find($id);


$trasfondo->setValidado(1);
$this->entityManager->flush();

return $this->redirectToRoute('app_revisiones_trasfondo');
}

#[Route("/eliminar_trasfondo/{id}", name:"app_eliminar_trasfondo")]
public function eliminarTrasfondo($id)
{
$trasfondo = $this->entityManager->getRepository(Trasfondo::class)->find($id);


$this->entityManager->remove($trasfondo);
$this->entityManager->flush();

return $this->redirectToRoute('app_revisiones_trasfondo');
}


#[Route('/solicitud_dote', name: 'app_solicitud_dote')]
    public function Solicitudes_Dotes( Request $request):Response
	{
       
        
        $dote=new Dotes();
       
		$form = $this->createForm(DotesType2::Class,$dote);
        
            
		$form->handleRequest($request);
       
       
        
        if ($form->isSubmitted() && $form->isValid()) {
            $dotes = $form->getData();
            if ($dotes->getAutor() == null){
                $dotes->setAutor('Anónimo');
            }

            $dotes->setValidado(false);
            $this->entityManager->persist($dotes);
            $this->entityManager->flush();
            return $this->redirectToRoute('app_solicitud_ok');
        }
        
		return $this->render( 'solicitudes/dotes.html.twig', array('form' => $form));
	}

    #[Route('/revisiones_dotes', name: 'app_revisiones_dote')]
public function revisiones_dotes(): Response
{
    $revisiones = $this->entityManager->getRepository(Dotes::class)->FindNonValidated();
    return $this->render('revisiones/revisiones_dote.html.twig', [
        'revisiones' => $revisiones,
    ]);
}

#[Route("/solicitud_dote/{id}", name:"app_comprobar_dote")]
public function doteok(Request $request, $id):Response
{
    
    $dote = $this->entityManager->getRepository(Dotes::class)->FindNonValidatedById($id);
   
    
    return $this->render('revisiones/revision_dote.html.twig', [
         'dote' => $dote,
    ]);
}

#[Route("/validar_dote/{id}", name:"app_validar_dote")]
public function validarDotes($id)
{
$dote = $this->entityManager->getRepository(Dotes::class)->find($id);


$dote->setValidado(1);
$this->entityManager->flush();

return $this->redirectToRoute('app_revisiones_dote');
}

#[Route("/eliminar_dote/{id}", name:"app_eliminar_dote")]
public function eliminarDote($id)
{
$dote = $this->entityManager->getRepository(Dotes::class)->find($id);


$this->entityManager->remove($dote);
$this->entityManager->flush();

return $this->redirectToRoute('app_revisiones_dote');
}


#[Route('/solicitud_hechizo', name: 'app_solicitud_hechizo')]
    public function Solicitudes_Hechizos( Request $request):Response
	{
       
        
        $hechizo=new Hechizos();
       
		$form = $this->createForm(HechizosType2::Class,$hechizo);
        
            
		$form->handleRequest($request);
       
       
        
        if ($form->isSubmitted() && $form->isValid()) {
            $hechizos = $form->getData();
            if ($hechizos->getAutor() == null){
                $hechizos->setAutor('Anónimo');
            }

            $hechizos->setValidado(false);
            $this->entityManager->persist($hechizos);
            $this->entityManager->flush();
            return $this->redirectToRoute('app_solicitud_ok');
        }
        
		return $this->render( 'solicitudes/hechizos.html.twig', array('form' => $form));
	}

    #[Route('/revisiones_hechizos', name: 'app_revisiones_hechizo')]
public function revisiones_hechizos(): Response
{
    $revisiones = $this->entityManager->getRepository(Hechizos::class)->FindNonValidated();
    return $this->render('revisiones/revisiones_hechizo.html.twig', [
        'revisiones' => $revisiones,
    ]);
}

#[Route("/solicitud_hechizo/{id}", name:"app_comprobar_hechizo")]
public function hechizook(Request $request, $id):Response
{
    $hechizo = $this->entityManager->getRepository(Hechizos::class)->FindNonValidatedById($id);
   
    
    return $this->render('revisiones/revision_hechizo.html.twig', [
         'hechizo' => $hechizo,
    ]);
}

#[Route("/validar_hechizo/{id}", name:"app_validar_hechizo")]
public function validarHechizos($id)
{
$subraza = $this->entityManager->getRepository(Subrazas::class)->find($id);


$subraza->setValidado(1);
$this->entityManager->flush();

return $this->redirectToRoute('app_revisiones_hechizo');
}

#[Route("/eliminar_hechizos/{id}", name:"app_eliminar_hechizo")]
public function eliminarHechizo($id)
{
$hechizo = $this->entityManager->getRepository(Hechizos::class)->find($id);


$this->entityManager->remove($hechizo);
$this->entityManager->flush();

return $this->redirectToRoute('app_revisiones_hechizo');
}






     
}

