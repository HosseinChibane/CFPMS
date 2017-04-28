<?php

// src/DUDEEGO/PlatformBundle/Controller/AdvertController.php

namespace DUDEEGO\PlatformBundle\Controller;

use DUDEEGO\PlatformBundle\Entity\EA_Personne;
use DUDEEGO\PlatformBundle\Entity\EA_Physique;
use DUDEEGO\PlatformBundle\Entity\EA_Morale;
use DUDEEGO\PlatformBundle\Entity\User;

use DUDEEGO\PlatformBundle\Form\EA_PersonneType;
use DUDEEGO\PlatformBundle\Form\EA_PhysiqueType;
use DUDEEGO\PlatformBundle\Form\EA_MoraleType;

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
		$physique = $em->getRepository('DUDEEGOPlatformBundle:EA_Physique')->findOneById(1);		
		$form = $this->createform(EA_PhysiqueType::class, $physique);
		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {

			$physique = $form->getData();
			$em = $this->getDoctrine()->getManager();
			$em->persist($physique);
			$em->flush();

			$request->getSession()->getFlashBag()->add('notice', 'Modifcation bien enregistrée.');

			return $this->redirectToRoute('dudeego_platform_abonne_monProfil');
		}

		return $this->render('DUDEEGOPlatformBundle:PageAbonne:monprofil.html.twig', array(
			'form' => $form->createView(),
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
		$content = $this->get('templating')->render('DUDEEGOPlatformBundle:PageAbonne:mesdemandes.html.twig');
		return new Response($content);
	}

	public function mesdocumentsAction()
	{    
		$content = $this->get('templating')->render('DUDEEGOPlatformBundle:PageAbonne:mesdocuments.html.twig');
		return new Response($content);
	}

	public function aideAction()
	{    
		$content = $this->get('templating')->render('DUDEEGOPlatformBundle:PageAbonne:aide.html.twig');
		return new Response($content);
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