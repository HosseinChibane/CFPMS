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

use DUDEEGO\PlatformBundle\Form\ItemFilterType;


class PageController extends Controller
{
	public function indexAction()
	{    
		$content = $this->get('templating')->render('DUDEEGOPlatformBundle:Page:index.html.twig');
		return new Response($content);
	}

	public function showComparateurAction()
	{
		$listUniversite = $this
		->getDoctrine()
		->getManager()
		->getRepository('DUDEEGOPlatformBundle:T_Universite')
		->findAll()
		;
		dump($listUniversite);exit();

		return $this->render('DUDEEGOPlatformBundle:Page:comparateur.html.twig', array('listUniversite' => $listUniversite));
	}

	public function filterComparateurAction(Request $request)
	{
		$form = $this->get('form.factory')->create(ItemFilterType::class);

		if ($request->query->has($form->getNometablissement())) {
            // manually bind values from the request
			$form->submit($request->query->get($form->getNometablissement()));

            // initialize a query builder
			$filterBuilder = $this->get('doctrine.orm.entity_manager')
			->getRepository('DUDEEGOPlatformBundle:T_Universite')
			->createQueryBuilder('e');

            // build the query from the given form object
			$this->get('lexik_form_filter.query_builder_updater')->addFilterConditions($form, $filterBuilder);

            // now look at the DQL =)
			var_dump($filterBuilder->getDql());
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