<?php

// src/DUDEEGO/PlatformBundle/Controller/AdvertController.php

namespace DUDEEGO\PlatformBundle\Controller;

use DUDEEGO\PlatformBundle\Entity\EA_FAQ;

use DUDEEGO\PlatformBundle\Entity\EA_Personne;
use DUDEEGO\PlatformBundle\Form\EA_PersonneType;

use DUDEEGO\PlatformBundle\Entity\EA_Physique;
use DUDEEGO\PlatformBundle\Form\EA_PhysiqueType;

use DUDEEGO\PlatformBundle\Entity\EA_Morale;
use DUDEEGO\PlatformBundle\Form\EA_MoraleType;

use DUDEEGO\PlatformBundle\Entity\EA_Langue;
use DUDEEGO\PlatformBundle\Form\EA_LangueType;

use DUDEEGO\PlatformBundle\Entity\User;
use DUDEEGO\PlatformBundle\Form\UserType;

use DUDEEGO\PlatformBundle\Entity\EA_Image;
use DUDEEGO\PlatformBundle\Form\EA_ImageType;

use DUDEEGO\PlatformBundle\Entity\EA_Demande_Inscription;
use DUDEEGO\PlatformBundle\Entity\EA_Demande_InscriptionType;

use DUDEEGO\PlatformBundle\Entity\EA_Document_Inscription;
use DUDEEGO\PlatformBundle\Entity\EA_Document_InscriptionType;

use DUDEEGO\PlatformBundle\Entity\EA_Document;
use DUDEEGO\PlatformBundle\Form\EA_DocumentType;

use DUDEEGO\PlatformBundle\Entity\T_Universite;
use DUDEEGO\PlatformBundle\Form\T_UniversiteType;

use DUDEEGO\PlatformBundle\Entity\T_Formation_Universite;
use DUDEEGO\PlatformBundle\Entity\T_Formation_UniversiteType;

use DUDEEGO\PlatformBundle\Entity\T_Langue_Universite;
use DUDEEGO\PlatformBundle\Entity\T_Langue_UniversiteType;

use DUDEEGO\PlatformBundle\Entity\T_Document_Universite;
use DUDEEGO\PlatformBundle\Entity\T_Document_UniversiteType;

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

class BackController extends Controller
{
	public function monprofilAction(Request $request)
	{ 
		$user = $this->getUser();
		$em = $this->getDoctrine()->getManager();

		$physique = $em->getRepository('DUDEEGOPlatformBundle:EA_Physique')->findOneById($user->getPhysique()->getId());
		$image = $em->getRepository('DUDEEGOPlatformBundle:EA_Image')->find($physique->getId());

		$form = $this->createform(EA_PhysiqueType::class, $physique);
		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {

			$physique = $form->getData();
			//dump($form->getData());exit();
			
			$em->persist($physique);
			$em->flush();

			$this->addFlash('notice','Modifcation bien enregistrée.');
			return $this->redirectToRoute('dudeego_platform_abonne_monProfil');
		}

		return $this->render('DUDEEGOPlatformBundle:Back:monprofil.html.twig', array(
			'form' => $form->createView(),
			'physique' => $physique,
			));		
	}

	public function mesparametresAction(Request $request)
	{    

		$user = $this->getUser();
		if (!is_object($user) || !$user instanceof UserInterface) {
			throw new AccessDeniedException('This user does not have access to this section.');
		}

		/** @var $dispatcher EventDispatcherInterface */
		$dispatcher = $this->get('event_dispatcher');

		$event = new GetResponseUserEvent($user, $request);
		$dispatcher->dispatch(FOSUserEvents::PROFILE_EDIT_INITIALIZE, $event);
		$dispatcher->dispatch(FOSUserEvents::CHANGE_PASSWORD_INITIALIZE, $event);

		if (null !== $event->getResponse()) {
			return $event->getResponse();
		}

		/** @var $formFactory FactoryInterface */
		$formFactory = $this->get('fos_user.change_password.form.factory');

		$form = $formFactory->createForm();
		$form->setData($user);

		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {
			/** @var $userManager UserManagerInterface */
			$userManager = $this->get('fos_user.user_manager');

			$event = new FormEvent($form, $request);
			$dispatcher->dispatch(FOSUserEvents::PROFILE_EDIT_SUCCESS, $event);
			$dispatcher->dispatch(FOSUserEvents::CHANGE_PASSWORD_SUCCESS, $event);

			$userManager->updateUser($user);

			if (null === $response = $event->getResponse()) {
				$url = $this->generateUrl('fos_user_profile_show');
				$response = new RedirectResponse($url);
			}
			
			$dispatcher->dispatch(FOSUserEvents::PROFILE_EDIT_COMPLETED, new FilterUserResponseEvent($user, $request, $response));
			$dispatcher->dispatch(FOSUserEvents::CHANGE_PASSWORD_COMPLETED, new FilterUserResponseEvent($user, $request, $response));

			return $response;
		}

		return $this->render('DUDEEGOPlatformBundle:Back:mesparametres.html.twig', array(
			'form' => $form->createView(),
			));
	}

	public function mesdocumentsAction(Request $request)
	{    
		$user = $this->getUser();
		$em = $this->getDoctrine()->getManager();

		$physique = $em->getRepository('DUDEEGOPlatformBundle:EA_Physique')->findOneById($user->getPhysique()->getId());		
		$documents = $em->getRepository('DUDEEGOPlatformBundle:EA_Document')->find($physique->getId());

		$form = $this->createform(EA_DocumentType::class, $documents);
		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {

			$physique = $form->getData();
			$em->persist($physique);
			$em->flush();

			$this->addFlash('notice','Document bien enregistrée.');
			return $this->redirectToRoute('dudeego_platform_abonne_mesDocuments');
		}

		return $this->render('DUDEEGOPlatformBundle:Back:mesdocuments.html.twig', array(
			'form' => $form->createView(),
			'documents' => $documents,
			));

	}

	public function mesdemandesAction()
	{    
		$user = $this->getUser();
		$em = $this->getDoctrine()->getManager();
		$physique = $em->getRepository('DUDEEGOPlatformBundle:EA_Physique')->findOneById($user->getPhysique()->getId());
		$listDemandeInscription = $em->getRepository('DUDEEGOPlatformBundle:EA_Demande_Inscription')->getDemandesIncriptions($physique->getId());

		return $this->render('DUDEEGOPlatformBundle:Back:mesdemandes.html.twig', array(
			'listDemandeInscription' => $listDemandeInscription,
			));		
	}

	public function detailsdemandesAction(EA_Demande_Inscription $eA_Demande_Inscription)
	{    
		return $this->render('DUDEEGOPlatformBundle:Back:detailsdemandes.html.twig', array(
			'eA_Demande_Inscription' => $eA_Demande_Inscription,
			));
	}

	public function modifierdemandesAction(Request $request, EA_Demande_Inscription $eA_Demande_Inscription)
	{    
		$editForm = $this->createForm('DUDEEGO\PlatformBundle\Form\EA_Demande_InscriptionType', $eA_Demande_Inscription);
		$editForm->handleRequest($request);

		if ($editForm->isSubmitted() && $editForm->isValid()) {
			
			$em = $this->getDoctrine()->getManager();
			$demande = $em->getRepository('DUDEEGOPlatformBundle:EA_Demande_Inscription')->findOneById($eA_Demande_Inscription->getId());
			dump($demande);exit();
			$eA_Demande_Inscription->setType($demande->getType());
			$eA_Demande_Inscription->setEtat('en attente');
			$this->getDoctrine()->getManager()->flush();

			return $this->redirectToRoute('dudeego_platform_abonne_modifierDemandes', array('id' => $eA_Demande_Inscription->getId()));
		}

		return $this->render('DUDEEGOPlatformBundle:Back:modifierdemandes.html.twig', array(
			'eA_Demande_Inscription' => $eA_Demande_Inscription,
			'edit_form' => $editForm->createView(),
			));
	}

	public function aideAction()
	{    
		$em = $this->getDoctrine()->getManager();
		$listFAQ = $em->getRepository('DUDEEGOPlatformBundle:EA_FAQ')->findAll();

		return $this->render('DUDEEGOPlatformBundle:Back:aide.html.twig', array(
			'listFAQ' => $listFAQ,
			));		
	}

	public function contactAction(Request $request)
	{    
		$message = \Swift_Message::newInstance()
		->setSubject('Hello Email')
		->setFrom('dudeego.contact@gmail.com')
		->setTo('chibanehossein@gmail.com')
		->setBody('test body');

		$this->get('mailer')->send($message);

		return $this->render('DUDEEGOPlatformBundle:Back:contact.html.twig');
	}

	public function universiteOneAction(Request $request)
	{    
		$user = $this->getUser();
		$em = $this->getDoctrine()->getManager();

		$form = $this->createform(T_UniversiteType::class);
		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {

				#recherche le PDF
			if ($form->get('nometablissement')->getData()->getNomEtablissement() !== null) {
					//$langue = $form->get('formations')->get('langues')->getData()->getLangue();
					//$formation = $form->get('formations')->get('formation')->getData()->getFormation();
				$nometablissement = $form->get('nometablissement')->getData()->getNomEtablissement();
				$universiteId = $form->get('nometablissement')->getData()->getId();

				$document = $em->getRepository('DUDEEGOPlatformBundle:T_Document_Universite')
				->getDocumentIncription($universiteId);

				return $this->render('DUDEEGOPlatformBundle:Back:universiteTwo.html.twig', array(
					'form' => $form->createView(),
					'document' => $document,
					));	
			}
		}

		return $this->render('DUDEEGOPlatformBundle:Back:universiteOne.html.twig', array(
			'form' => $form->createView(),
			));	
	}

	public function universiteTwoAction(Request $request)
	{    
		$eA_Demande_Inscription = new EA_Demande_Inscription();
		$form = $this->createForm('DUDEEGO\PlatformBundle\Form\EA_Demande_InscriptionType', $eA_Demande_Inscription);
		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {

			$user = $this->getUser();
			$em = $this->getDoctrine()->getManager();
			$physique = $em->getRepository('DUDEEGOPlatformBundle:EA_Physique')->findOneById($user->getPhysique()->getId());
			$eA_Demande_Inscription->setPhysique($physique);
			$eA_Demande_Inscription->setType('universite');
			$eA_Demande_Inscription->setEtat('creation');

			//dump($eA_Demande_Inscription);exit();

			$em = $this->getDoctrine()->getManager();
			$em->persist($eA_Demande_Inscription);
			$em->flush();

			return $this->redirectToRoute('dudeego_platform_abonne_mesDemandes');
		}

		return $this->render('DUDEEGOPlatformBundle:Back:universiteThree.html.twig', array(
			'eA_Demande_Inscription' => $eA_Demande_Inscription,
			'form' => $form->createView(),
			));
	}


	public function langueOneAction(Request $request)
	{    
		$user = $this->getUser();
		$em = $this->getDoctrine()->getManager();

		$form = $this->createform(EA_MoraleType::class);
		//dump($form);exit();
		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {
			#recherche le PDF
			if ($form->get('raisonsocial')->getData()->getRaisonSocial() !== null) {
				$raisonsocial = $form->get('raisonsocial')->getData()->getRaisonSocial();
				$raisonSocialId = $form->get('raisonsocial')->getData()->getId();

				$document = $em->getRepository('DUDEEGOPlatformBundle:T_Document_Universite')
				->getDocumentIncription($raisonSocialId);

				return $this->render('DUDEEGOPlatformBundle:Back:langueTwo.html.twig', array(
					'form' => $form->createView(),
					'document' => $document,
					));	
			}
		}

		return $this->render('DUDEEGOPlatformBundle:Back:langueOne.html.twig', array(
			'form' => $form->createView(),
			));	
	}

	public function langueTwoAction(Request $request)
	{    
		$eA_Demande_Inscription = new EA_Demande_Inscription();
		$form = $this->createForm('DUDEEGO\PlatformBundle\Form\EA_Demande_InscriptionType', $eA_Demande_Inscription);
		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {

			$user = $this->getUser();
			$em = $this->getDoctrine()->getManager();
			$physique = $em->getRepository('DUDEEGOPlatformBundle:EA_Physique')->findOneById($user->getPhysique()->getId());
			$eA_Demande_Inscription->setPhysique($physique);
			$eA_Demande_Inscription->setType('langue');
			$eA_Demande_Inscription->setEtat('creation');

			//dump($eA_Demande_Inscription);exit();

			$em = $this->getDoctrine()->getManager();
			$em->persist($eA_Demande_Inscription);
			$em->flush();

			return $this->redirectToRoute('dudeego_platform_abonne_mesDemandes');
		}

		return $this->render('DUDEEGOPlatformBundle:Back:langueThree.html.twig', array(
			'eA_Demande_Inscription' => $eA_Demande_Inscription,
			'form' => $form->createView(),
			));
	}

	public function logementOneAction(Request $request)
	{    
		$user = $this->getUser();
		$em = $this->getDoctrine()->getManager();

		$form = $this->createform(T_UniversiteType::class);
		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {
				#recherche le PDF
			if ($form->get('nometablissement')->getData()->getNomEtablissement() !== null) {
				$nometablissement = $form->get('nometablissement')->getData()->getNomEtablissement();
				$universiteId = $form->get('nometablissement')->getData()->getId();

				$document = $em->getRepository('DUDEEGOPlatformBundle:T_Document_Universite')
				->getDocumentIncription($universiteId);

				return $this->render('DUDEEGOPlatformBundle:Back:logementTwo.html.twig', array(
					'form' => $form->createView(),
					'document' => $document,
					));	
			}
		}

		return $this->render('DUDEEGOPlatformBundle:Back:logementOne.html.twig', array(
			'form' => $form->createView(),
			));	
	}

	public function logementTwoAction(Request $request)
	{    
		$eA_Demande_Inscription = new EA_Demande_Inscription();
		$form = $this->createForm('DUDEEGO\PlatformBundle\Form\EA_Demande_InscriptionType', $eA_Demande_Inscription);
		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {

			$user = $this->getUser();
			$em = $this->getDoctrine()->getManager();
			$physique = $em->getRepository('DUDEEGOPlatformBundle:EA_Physique')->findOneById($user->getPhysique()->getId());
			$eA_Demande_Inscription->setPhysique($physique);
			$eA_Demande_Inscription->setType('logement');
			$eA_Demande_Inscription->setEtat('creation');

			//dump($eA_Demande_Inscription);exit();

			$em = $this->getDoctrine()->getManager();
			$em->persist($eA_Demande_Inscription);
			$em->flush();

			return $this->redirectToRoute('dudeego_platform_abonne_mesDemandes');
		}

		return $this->render('DUDEEGOPlatformBundle:Back:logementThree.html.twig', array(
			'eA_Demande_Inscription' => $eA_Demande_Inscription,
			'form' => $form->createView(),
			));
	}

	public function preparationAction()
	{    
		$content = $this->get('templating')->render('DUDEEGOPlatformBundle:Back:preparation.html.twig');
		return new Response($content);
	}

	public function mutuelleAction()
	{    
		$content = $this->get('templating')->render('DUDEEGOPlatformBundle:Back:mutuelle.html.twig');
		return new Response($content);
	}
}