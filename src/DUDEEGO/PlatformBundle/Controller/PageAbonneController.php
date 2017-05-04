<?php

// src/DUDEEGO/PlatformBundle/Controller/AdvertController.php

namespace DUDEEGO\PlatformBundle\Controller;

use DUDEEGO\PlatformBundle\Entity\EA_Personne;
use DUDEEGO\PlatformBundle\Entity\EA_Physique;
use DUDEEGO\PlatformBundle\Entity\EA_Morale;
use DUDEEGO\PlatformBundle\Entity\User;
use DUDEEGO\PlatformBundle\Entity\EA_Image;
use DUDEEGO\PlatformBundle\Entity\EA_Demande_Inscription;

use DUDEEGO\PlatformBundle\Form\EA_PersonneType;
use DUDEEGO\PlatformBundle\Form\EA_PhysiqueType;
use DUDEEGO\PlatformBundle\Form\EA_MoraleType;
use DUDEEGO\PlatformBundle\Form\EA_ImageType;

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

use FOS\UserBundle\Event\FilterUserResponseEvent;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\Form\Factory\FactoryInterface;
use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Model\UserInterface;
use FOS\UserBundle\Model\UserManagerInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class PageAbonneController extends Controller
{
	public function monprofilAction(Request $request)
	{ 
		$user = $this->getUser();

		$em = $this->getDoctrine()->getManager();
		$physique = $em->getRepository('DUDEEGOPlatformBundle:EA_Physique')->findOneById($user->getPhysique()->getId());
		$image = $em->getRepository('DUDEEGOPlatformBundle:EA_Image')->findOneById($physique->getImage());
		
		$form = $this->createform(EA_PhysiqueType::class, $physique);
		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {

			$physique = $form->getData();
			$em = $this->getDoctrine()->getManager();
			$em->persist($physique);
			$em->flush();

			$this->addFlash('notice','Modifcation bien enregistrée.');
			return $this->redirectToRoute('dudeego_platform_abonne_monProfil');
		}

		return $this->render('DUDEEGOPlatformBundle:PageAbonne:monprofil.html.twig', array(
			'form' => $form->createView(),
			'physique' => $physique,
			'image' => $image,
			));		
	}

	public function mesparametresAction(Request $request)
	{    
		$user = $this->getUser();

		/** @var $formFactory FactoryInterface */
		$formFactory = $this->get('fos_user.profile.form.factory');

		$form = $formFactory->createForm();
		$form->setData($user);

		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {
			/** @var $userManager UserManagerInterface */
			$userManager = $this->get('fos_user.user_manager');

			$event = new FormEvent($form, $request);
			$dispatcher->dispatch(FOSUserEvents::PROFILE_EDIT_SUCCESS, $event);

			$userManager->updateUser($user);

			if (null === $response = $event->getResponse()) {
				$url = $this->generateUrl('fos_user_profile_show');
				$response = new RedirectResponse($url);
			}

			$dispatcher->dispatch(FOSUserEvents::PROFILE_EDIT_COMPLETED, new FilterUserResponseEvent($user, $request, $response));

			return $response;
		}

		return $this->render('DUDEEGOPlatformBundle:PageAbonne:mesparametres.html.twig', array(
			'form' => $form->createView(),
			));
	}

	public function mesdemandesAction()
	{    
		$user = $this->getUser();
		$em = $this->getDoctrine()->getManager();
		$physique = $em->getRepository('DUDEEGOPlatformBundle:EA_Physique')->findOneById($user->getPhysique()->getId());
		$listDemandeInscription = $em->getRepository('DUDEEGOPlatformBundle:EA_Demande_Inscription')->find($physique->getId());

		return $this->render('DUDEEGOPlatformBundle:PageAbonne:mesdemandes.html.twig', array(
			'listDemandeInscription' => $listDemandeInscription,
			));		
	}

	public function mesdocumentsAction()
	{    
		$content = $this->get('templating')->render('DUDEEGOPlatformBundle:PageAbonne:mesdocuments.html.twig');
		return new Response($content);
	}

	public function aideAction(Request $request)
	{    
		$em = $this->getDoctrine()->getManager();
		$images =  $em->getRepository('DUDEEGOPlatformBundle:EA_Image')->findOneById(9);

		$form = $this->createform(EA_ImageType::class, $images);
		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {

			$images = $form->getData();
			$em = $this->get('doctrine')->getEntityManager();
			$em->persist($images);
			$em->flush();

			$this->addFlash('notice','Fichier bien enregistrée.');
			return $this->redirectToRoute('dudeego_platform_abonne_aide');
		}

		return $this->render('DUDEEGOPlatformBundle:PageAbonne:aide.html.twig', array(
			'form' => $form->createView(),
			'images' => $images,
			));
	}

	public function universiteAction()
	{    
		$content = $this->get('templating')->render('DUDEEGOPlatformBundle:PageAbonne:Universite.html.twig');
		return new Response($content);
	}

	public function langueAction()
	{    
		$content = $this->get('templating')->render('DUDEEGOPlatformBundle:PageAbonne:langue.html.twig');
		return new Response($content);
	}

	public function logementAction()
	{    
		$content = $this->get('templating')->render('DUDEEGOPlatformBundle:PageAbonne:logement.html.twig');
		return new Response($content);
	}

	public function preparationAction()
	{    
		$content = $this->get('templating')->render('DUDEEGOPlatformBundle:PageAbonne:preparation.html.twig');
		return new Response($content);
	}

	public function mutuelleAction()
	{    
		$content = $this->get('templating')->render('DUDEEGOPlatformBundle:PageAbonne:mutuelle.html.twig');
		return new Response($content);
	}
}