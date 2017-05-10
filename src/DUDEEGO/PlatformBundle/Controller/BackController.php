<?php

// src/DUDEEGO/PlatformBundle/Controller/AdvertController.php

namespace DUDEEGO\PlatformBundle\Controller;

use DUDEEGO\PlatformBundle\Entity\EA_Personne;
use DUDEEGO\PlatformBundle\Form\EA_PersonneType;

use DUDEEGO\PlatformBundle\Entity\EA_Physique;
use DUDEEGO\PlatformBundle\Form\EA_PhysiqueType;

use DUDEEGO\PlatformBundle\Entity\EA_Morale;
use DUDEEGO\PlatformBundle\Form\EA_MoraleType;

use DUDEEGO\PlatformBundle\Entity\User;
use DUDEEGO\PlatformBundle\Form\UserType;

use DUDEEGO\PlatformBundle\Entity\EA_Image;
use DUDEEGO\PlatformBundle\Form\EA_ImageType;

use DUDEEGO\PlatformBundle\Entity\EA_Demande_Inscription;
use DUDEEGO\PlatformBundle\Entity\EA_Demande_InscriptionType;

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
		$em = $this->getDoctrine()->getManager();
		$physique = $em->getRepository('DUDEEGOPlatformBundle:User')->findOneById($user->getId());
		$form = $this->createform(UserType::class, $physique);
		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {

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
		$listDemandeInscription = $em->getRepository('DUDEEGOPlatformBundle:EA_Demande_Inscription')->find($physique->getId());

		return $this->render('DUDEEGOPlatformBundle:Back:mesdemandes.html.twig', array(
			'listDemandeInscription' => $listDemandeInscription,
			));		
	}

	public function addDemandesAction()
	{    
		$user = $this->getUser();
		$em = $this->getDoctrine()->getManager();

		$demande = new EA_Demande_Inscription();
		dump($demande);exit();
		$physique = $em->getRepository('DUDEEGOPlatformBundle:EA_Physique')->findOneById($user->getPhysique()->getId());
		dump($physique);exit();
		$demande->setPhysique($physique);
		dump($demande);exit();
		$em->persist($demande);
		$em->flush();

		$this->addFlash('notice','Demande bien enregistrée.');
		return $this->redirectToRoute('dudeego_platform_abonne_mesDemandes');	
	}

	public function aideAction(Request $request)
	{    
		return $this->render('DUDEEGOPlatformBundle:Back:aide.html.twig');
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
	public function universiteAction(Request $request)
	{    
		$user = $this->getUser();
		$em = $this->getDoctrine()->getManager();

		$form = $this->createform(T_UniversiteType::class);
		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {
			#recherche le PDF
				//$langue = $form->get('formations')->get('langues')->getData()->getLangue();
				//$formation = $form->get('formations')->get('formation')->getData()->getFormation();
			if ($form->get('nometablissement')->getData()->getNomEtablissement() !== null) {
				$nometablissement = $form->get('nometablissement')->getData()->getNomEtablissement();
				$universiteId = $form->get('nometablissement')->getData()->getId();

				$document = $em->getRepository('DUDEEGOPlatformBundle:T_Document_Universite')
				->getDocumentIncription($universiteId);


				return $this->render('DUDEEGOPlatformBundle:Back:universite.html.twig', array(
					'form' => $form->createView(),
					'document' => $document,
					));	
			}

		}

		return $this->render('DUDEEGOPlatformBundle:Back:universite.html.twig', array(
			'form' => $form->createView(),
			));	
	}

	public function langueAction()
	{    
		$content = $this->get('templating')->render('DUDEEGOPlatformBundle:Back:langue.html.twig');
		return new Response($content);
	}

	public function logementAction()
	{    
		$content = $this->get('templating')->render('DUDEEGOPlatformBundle:Back:logement.html.twig');
		return new Response($content);
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