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

		$listUniversite = $this
		->getDoctrine()
		->getManager()
		->getRepository('DUDEEGOPlatformBundle:T_Universite')
		->findAll();

		return $this->render('DUDEEGOPlatformBundle:Page:comparateur.html.twig', array(
			'form' => $form->createView(),
			'listUniversite' => $listUniversite,
			));
	}

	public function addfavComparateurAction(Request $request, $id)
	{
		$form = $this->createform(T_Search_UniversiteType::class);

		$session = $this->get('session');
		$cart = $session->get('cart', array());

    	// fetch the cart		
		$em = $this->getDoctrine()->getEntityManager();  
		foreach($cart as $id) 
		{
			$listFavUniversite[] = $em->getRepository('DUDEEGOPlatformBundle:T_Universite')->findById($id);
		} 

		//dump($cart);exit();

		if (!isset($listFavUniversite))
		{
			return $this->render('DUDEEGOPlatformBundle:Page:comparateur.html.twig', array(
				'form' => $form->createView(),
				'listFavUniversite' => $listFavUniversite,
				));
		} 
		else {
			return $this->render('DUDEEGOPlatformBundle:Page:comparateur.html.twig', array(
				'form' => $form->createView(),
				'listFavUniversite' => $listFavUniversite,
				));
		}
	}

	public function removefavComparateurAction($id)
	{
    		// check the cart
		$session = $this->getRequest()->getSession();
		$cart = $session->get('cart', array());

    		// if it doesn't exist redirect to cart index page. end
		if(!$cart) { $this->redirect( $this->generateUrl('dudeego_platform_showComparateur') ); }

    		// check if the $id already exists in it.
		if( isset($cart[$id]) ) {
        		// if it does ++ the quantity
			$cart[$id]['quantity'] = '0';
			unset($cart[$id]);
        		//echo $cart[$id]['quantity']; die();
		} else {
			$this->get('session')->setFlash('notice', 'Go to hell');    
			return $this->redirect( $this->generateUrl('dudeego_platform_showComparateur') );
		}

		$session->set('cart', $cart);

    		// redirect(index page)
		$this->get('session')->setFlash('notice', 'This product is Remove');
		return $this->redirect( $this->generateUrl('dudeego_platform_showComparateur') );
	}

	public function detailsComparateurAction(int $id)
	{
		$em = $this->getDoctrine()->getManager();
		$listUniversite = $em->getRepository('DUDEEGOPlatformBundle:T_Universite')->find($id);

		if (null === $listUniversite) {
			throw new NotFoundHttpException("L'universite d'id : ".$id." n'existe pas.");
		}	

		return $this->render('DUDEEGOPlatformBundle:Page:detailscomparateur.html.twig', array(
			'listUniversite' => $listUniversite
			));
	}

	public function filterComparateurAction(Request $request)
	{
		$form = $this->get('form.factory')->create(T_Search_UniversiteType::class);

		if ($request->query->has($form->getName())) {
            // manually bind values from the request
			$form->submit($request->query->get($form->getName()));
			$data = $form->getData();
			//dump($data);die();

			$formations = $data->getFormations();
			$langues = $data->getLangues();
			$villes = $data->getVilles();
			$pays =  $data->getPays();
			$nomuniversite =  $data->getNomuniversite();

			$listUniversite = $this
			->getDoctrine()
			->getManager()
			->getRepository('DUDEEGOPlatformBundle:T_Universite')
			->getUniversiteWithSearch($formations, $langues, $villes, $pays, $nomuniversite);

		}

		return $this->render('DUDEEGOPlatformBundle:Page:comparateur.html.twig', array(
			'form' => $form->createView(),
			'listUniversite' => $listUniversite,
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