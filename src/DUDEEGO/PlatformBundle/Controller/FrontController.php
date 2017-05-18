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
use DUDEEGO\PlatformBundle\Form\Search_UniversiteType;


class frontController extends Controller
{
	public function indexAction(Request $request)
	{    
		$form = $this->createform(Search_UniversiteType::class);

		$listUniversite = $this
		->getDoctrine()
		->getManager()
		->getRepository('DUDEEGOPlatformBundle:T_Universite')
		->getAllUniversite();

	    // get the cart from  the session
		$session = $request->getSession();
		$cart = $session->get('cart', array());

		if(isset($cart)) {
			// charge la liste des favoris
			foreach( $cart as $id => $quantity ) {
				$em = $this->getDoctrine()->getEntityManager();
				$listFavUniversite[] = $em->getRepository('DUDEEGOPlatformBundle:T_Universite')->findById($id);
			}           

			if(isset($listFavUniversite)) {
				return $this->render('DUDEEGOPlatformBundle:front:comparateur.html.twig', array(
					'form' => $form->createView(),
					'listUniversite' => $listUniversite,
					'listFavUniversite' => $listFavUniversite,
					));

			} else {
				return $this->render('DUDEEGOPlatformBundle:front:comparateur.html.twig', array(
					'form' => $form->createView(),
					'listUniversite' => $listUniversite,
					'empty' => true,
					));
			}

		} else {
			return $this->render('DUDEEGOPlatformBundle:front:comparateur.html.twig', array(
				'form' => $form->createView(),
				'listUniversite' => $listUniversite,
				'empty' => true,
				));
		}
	}

	public function showAccueilAction()
	{    
		return $this->render('DUDEEGOPlatformBundle:front:accueil.html.twig');
	}

	public function showAboutAction()
	{    
		return $this->render('DUDEEGOPlatformBundle:front:about.html.twig');
	}

	public function showComparateurAction(Request $request)
	{
		$form = $this->createform(Search_UniversiteType::class);

		$listUniversite = $this
		->getDoctrine()
		->getManager()
		->getRepository('DUDEEGOPlatformBundle:T_Universite')
		->getAllUniversite();

	    // get the cart from  the session
		$session = $request->getSession();
		$cart = $session->get('cart', array());

		if(isset($cart)) {
			// charge la liste des favoris
			foreach( $cart as $id => $quantity ) {
				$em = $this->getDoctrine()->getEntityManager();
				$listFavUniversite[] = $em->getRepository('DUDEEGOPlatformBundle:T_Universite')->findById($id);
			}           

			if(isset($listFavUniversite)) {
				return $this->render('DUDEEGOPlatformBundle:front:comparateur.html.twig', array(
					'form' => $form->createView(),
					'listUniversite' => $listUniversite,
					'listFavUniversite' => $listFavUniversite,
					));

			} else {
				return $this->render('DUDEEGOPlatformBundle:front:comparateur.html.twig', array(
					'form' => $form->createView(),
					'listUniversite' => $listUniversite,
					'empty' => true,
					));
			}

		} else {
			return $this->render('DUDEEGOPlatformBundle:front:comparateur.html.twig', array(
				'form' => $form->createView(),
				'listUniversite' => $listUniversite,
				'empty' => true,
				));
		}
	}

	public function PanierComparateurAction(Request $request, int $id)
	{
		# check the cart
		$session = $request->getSession();
		$cart = $session->get('cart', array());

    	# if it doesn't exist redirect to cart index front. end
		if(!isset($cart)) {
			$this->redirect($this->generateUrl('dudeego_platform_showComparateur'));
		}

    	# check if the $id already exists in it.
		if(isset($cart[$id])) {
			#remove
			unset($cart[$id]);
			$session->set('cart',$cart);
			$this->addFlash('notice','Universite supprimé !');
		} else {
			#throw new \Exception('Something went wrong!');

			# fetch the cart
			$em = $this->getDoctrine()->getEntityManager();
			$universite = $em->getRepository('DUDEEGOPlatformBundle:T_Universite')->findById($id);
			$session = $request->getSession();
			$cart = $session->get('cart', array());


    		# check if the $id already exists in it.
			if (!isset($universite)) {
				$this->addFlash('notice','Cette universite est indisponible !');  
				return $this->redirect($this->generateUrl('dudeego_platform_showComparateur'));
			} else {
				if(isset($cart[$id])) {
					$this->addFlash('notice','Cette universite est déja présente !');         
					return $this->redirect($this->generateUrl('dudeego_platform_showComparateur'));
				} else {
            	# if it doesnt make it 1
					$cart = $session->get('cart', array());
					$cart[$id] = $id;
				}

				$session->set('cart', $cart);
				return $this->redirect($this->generateUrl('dudeego_platform_showComparateur'));
			}
		}

		$session->set('cart', $cart);
		return $this->redirect($this->generateUrl('dudeego_platform_showComparateur'));

	}

	public function comparerUniversiteAction(Request $request)
	{
		// get the cart from  the session
		$session = $request->getSession();
		$cart = $session->get('cart', array());

		if(isset($cart)) {
			// charge la liste des favoris
			foreach( $cart as $id => $quantity ) {
				$em = $this->getDoctrine()->getEntityManager();
				$listFavUniversite[] = $em->getRepository('DUDEEGOPlatformBundle:T_Universite')->findById($id);
			}           

			if(isset($listFavUniversite)) {
				return $this->render('DUDEEGOPlatformBundle:front:comparer.html.twig', array(
					'listFavUniversite' => $listFavUniversite,
					));

			} else {
				return $this->render('DUDEEGOPlatformBundle:front:comparer.html.twig', array(
					'empty' => true,
					));
			}

		} else {
			return $this->render('DUDEEGOPlatformBundle:front:comparer.html.twig', array(
				'empty' => true,
				));
		}
	}

	public function detailsComparateurAction(int $id)
	{
		$em = $this->getDoctrine()->getManager();
		$listUniversite = $em->getRepository('DUDEEGOPlatformBundle:T_Universite')->find($id);

		if (null === $listUniversite) {
			throw new NotFoundHttpException("L'universite d'id : ".$id." n'existe pas.");
		}	

		return $this->render('DUDEEGOPlatformBundle:front:detailscomparateur.html.twig', array(
			'listUniversite' => $listUniversite
			));
	}

	public function filterComparateurAction(Request $request)
	{
		$form = $this->get('form.factory')->create(Search_UniversiteType::class);
		
		if($request->isXMLHttpRequest()) {
			$em = $this->getDoctrine()->getManager();

			$nomuniversite =  $request->getNomUniversite();
			
			$formations = $em->getRepository('DUDEEGOPlatformBundle:T_Formation_Universite')->findOneById($request->getFormations());
			$langues = $em->getRepository('DUDEEGOPlatformBundle:T_Langue_Universite')->findOneById($request->getLangues());
			$villes = $em->getRepository('DUDEEGOPlatformBundle:T_Ville_Universite')->findOneById($request->getVilles());
			$pays = $em->getRepository('DUDEEGOPlatformBundle:T_Pays_Universite')->findOneById($request->getPays());

			$listUniversite = $this
			->getDoctrine()
			->getManager()
			->getRepository('DUDEEGOPlatformBundle:T_Universite')
			->getUniversiteWithSearchAND($formations, $langues, $villes, $pays, $nomuniversite);

			$data = array(
				'listUniversite' => $listUniversite,
				);

			return $this->render('DUDEEGOPlatformBundle:front:filtercomparateur.html.twig', array(
				'form' => $form->createView(),
				'listUniversite' => $listUniversite,
				'data' => $data,
				));
		}
		else {
			$this->redirect($this->generateUrl('dudeego_platform_showComparateur'));
		}

		/*if ($form->isSubmitted() && $form->isValid()) {
            // manually bind values from the request
            dump($form->submit($request->query->get($form->getName())));exit();
			$form->submit($request->query->get($form->getName()));
			$data = $form->getData();

			$formations = $data->getFormations();
			$langues = $data->getLangues();
			$villes = $data->getVilles();
			$pays =  $data->getPays();
			$nomuniversite =  $data->getNomuniversite();

			$listUniversite = $this
			->getDoctrine()->getManager()->getRepository('DUDEEGOPlatformBundle:T_Universite')
			->getUniversiteWithSearchAND($formations, $langues, $villes, $pays, $nomuniversite);
		}*/

		return $this->render('DUDEEGOPlatformBundle:front:comparateur.html.twig', array(
			'form' => $form->createView(),
			));
	}

	public function itemsComparateurAction(Request $request)
	{
		$elementComparer = array('1' => $request->get('id0') , '2' => $request->get('id1'), '3' => $request->get('id2'), '4' => $request->get('id3'), '5' => $request->get('id4'), '6' => $request->get('id5'), '7' => $request->get('id6'), '8' => $request->get('id7'), '9' => $request->get('id8'), '10' => $request->get('id9') );

		if(isset($elementComparer)) {
			foreach ($elementComparer as $key => $value) {
				$em = $this->getDoctrine()->getEntityManager();
				$listFavUniversite[] = $em->getRepository('DUDEEGOPlatformBundle:T_Universite')->findById($value);
			}
		}

		if(isset($listFavUniversite)) {
			return $this->render('DUDEEGOPlatformBundle:front:comparer.html.twig', array(
				'listFavUniversite' => $listFavUniversite,
				));
		}
	}

	public function jobAction()
	{    
		$content = $this->get('templating')->render('DUDEEGOPlatformBundle:front:job.html.twig');
		return new Response($content);
	}

	public function stageAction()
	{    
		$content = $this->get('templating')->render('DUDEEGOPlatformBundle:front:stage.html.twig');
		return new Response($content);
	}

	public function logementAction()
	{    
		$content = $this->get('templating')->render('DUDEEGOPlatformBundle:front:logement.html.twig');
		return new Response($content);
	}

	public function langueAction()
	{    
		$content = $this->get('templating')->render('DUDEEGOPlatformBundle:front:langue.html.twig');
		return new Response($content);
	}  

	public function blogAction()
	{    
		$content = $this->get('templating')->render('DUDEEGOPlatformBundle:front:blog.html.twig');
		return new Response($content);
	}

}