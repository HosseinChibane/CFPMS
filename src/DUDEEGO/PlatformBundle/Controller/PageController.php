<?php

// src/DUDEEGO/PlatformBundle/Controller/AdvertController.php

namespace DUDEEGO\PlatformBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

use DUDEEGO\PlatformBundle\Entity\T_Universite;
use DUDEEGO\PlatformBundle\Entity\T_Adresse_Universite;

use DUDEEGO\PlatformBundle\Form\T_UniversiteType;
use DUDEEGO\PlatformBundle\Form\T_Search_UniversiteType;


class PageController extends Controller
{
	public function indexAction()
	{    
		$content = $this->get('templating')->render('DUDEEGOPlatformBundle:Page:index.html.twig');
		return new Response($content);
	}

	public function showComparateurAction(Request $request)
	{
		$form = $this->createform(T_Search_UniversiteType::class);
		$form->handleRequest($request);

		$listUniversite = $this
		->getDoctrine()
		->getManager()
		->getRepository('DUDEEGOPlatformBundle:T_Universite')
		->findAll()
		;

		return $this->render('DUDEEGOPlatformBundle:Page:comparateur.html.twig', array(
			'form' => $form->createView(),
			'listUniversite' => $listUniversite,
			));
	}

	public function detailsComparateurAction($id)
	{
		$em = $this->getDoctrine()->getManager();

    	// On récupère l'annonce $id
		$listUniversite = $em->getRepository('DUDEEGOPlatformBundle:T_Universite')->find($id);
		//dump($listUniversite);exit();

		if (null === $listUniversite) {
			throw new NotFoundHttpException("L'universite d'id : ".$id." n'existe pas.");
		}	

		return $this->render('DUDEEGOPlatformBundle:Page:detailscomparateur.html.twig', array(
			'listUniversite' => $listUniversite
			));
	}

	public function favorisComparateurAction($id)
	{
		$favs = $request->get('lisFavoristUniversite');
		foreach($favs  as $fav) {
    		//ADD TO SESSION
			$session->set('lisFavoristUniversite', $fav);
			$session->getFlashBag()->add('notice', 'Add to favorite');
		}

		return $this->render('DUDEEGOPlatformBundle:Page:comparateur.html.twig', array(
			'lisFavoristUniversite' => $lisFavoristUniversite
			));
	}

	public function filterComparateurAction(Request $request)
	{
		$form = $this->createform(T_Search_UniversiteType::class);
		$form->handleRequest($request);
		
		if ($form->isSubmitted() && $form->isValid()) {
			$listUniversite = $this
			->getDoctrine()
			->getManager()
			->getRepository('DUDEEGOPlatformBundle:T_Universite')
			->getUniversiteWithSearch()
			;

		}

		return $this->render('DUDEEGOPlatformBundle:Page:comparateur.html.twig', array(
			'form' => $form->createView(),
			));		

	}


	public function jobAction()
	{    
		$content = $this->get('templating')->render('DUDEEGOPlatformBundle:Page:job.html.twig');
		return new Response($content);
	}

	public function stageAction()
	{    
		$content = $this->get('templating')->render('DUDEEGOPlatformBundle:Page:stage.html.twig');
		return new Response($content);
	}

	public function logementAction()
	{    
		$content = $this->get('templating')->render('DUDEEGOPlatformBundle:Page:logement.html.twig');
		return new Response($content);
	}

	public function langueAction()
	{    
		$content = $this->get('templating')->render('DUDEEGOPlatformBundle:Page:langue.html.twig');
		return new Response($content);
	}  

	public function blogAction()
	{    
		$content = $this->get('templating')->render('DUDEEGOPlatformBundle:Page:blog.html.twig');
		return new Response($content);
	}
}