<?php

// src/DUDEEGO/PlatformBundle/Controller/AdvertController.php

namespace DUDEEGO\PlatformBundle\Controller;

use DUDEEGO\PlatformBundle\Entity\EA_FAQ;
use DUDEEGO\PlatformBundle\Form\ContactType;

use DUDEEGO\PlatformBundle\Form\InscriptionType;
use DUDEEGO\PlatformBundle\Form\InscriptionUniversiteType;

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

class backController extends Controller
{
	public function monprofilAction(Request $request)
	{ 
		try {
			if (!is_object($this->getUser()) || !$this->getUser() instanceof UserInterface) {
				throw new AccessDeniedException('Accès à cette page, le droit tu n\'as pas.');
				return $this->redirectToRoute('fos_user_security_login');
			}
			else {

				$user = $this->getUser();
				$em = $this->getDoctrine()->getManager();

				$physique = $em->getRepository('DUDEEGOPlatformBundle:EA_Physique')->findOneById($user->getPhysique()->getId());

				$imageUser = $em->getRepository('DUDEEGOPlatformBundle:EA_Image')->findOneById($user->getPhysique()->getImage());

				$form = $this->createform(EA_PhysiqueType::class, $physique);
				$form->handleRequest($request);

				if ($form->isSubmitted() && $form->isValid()) {

					$physique = $form->getData();
					$em->persist($physique);
					$em->flush();

					$this->addFlash('notice','Modifcation enregistrée avec succès !');
				}

				return $this->render('DUDEEGOPlatformBundle:back:monprofil.html.twig', array(
					'form' => $form->createView(),
					'imageUser'=> $imageUser,
					));		

				
			}	
		} catch (Exception $e) {
			$this->addFlash('notice','J\ai glissé chef !.'. $e);
			return $this->render('DUDEEGOPlatformBundle:front:index.html.twig');		
		}
		

	}

	public function mesparametresMDPAction(Request $request)
	{    
		try {
			if (!is_object($this->getUser()) || !$this->getUser() instanceof UserInterface) {
				throw new AccessDeniedException('Accès à cette page, le droit tu n\'as pas.');
			}
			else {
				$user = $this->getUser();
				/** @var $dispatcher EventDispatcherInterface */
				$dispatcher = $this->get('event_dispatcher');

				$event = new GetResponseUserEvent($user, $request);
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
					$dispatcher->dispatch(FOSUserEvents::CHANGE_PASSWORD_SUCCESS, $event);

					$userManager->updateUser($user);

					if (null === $response = $event->getResponse()) {
						$url = $this->generateUrl('dudeego_platform_abonne_mesParametresMDP');
						$response = new RedirectResponse($url);
					}

					$dispatcher->dispatch(FOSUserEvents::CHANGE_PASSWORD_COMPLETED, new FilterUserResponseEvent($user, $request, $response));
					return $response;
				}

				return $this->render('DUDEEGOPlatformBundle:back:mesparametresMDP.html.twig', array(
					'form' => $form->createView(),
					));
			}			
		} catch (Exception $e) {
			$this->addFlash('notice','J\ai glissé chef !.'. $e);
			return $this->render('DUDEEGOPlatformBundle:front:monprofil.html.twig');
		}
	}

	public function mesparametresMAILAction(Request $request)
	{    
		try {
			
			if (!is_object($this->getUser()) || !$this->getUser() instanceof UserInterface) {
				throw new AccessDeniedException('Accès à cette page, le droit tu n\'as pas.');
			}
			else {
				$user = $this->getUser();
				/** @var $dispatcher EventDispatcherInterface */
				$dispatcher = $this->get('event_dispatcher');

				$event = new GetResponseUserEvent($user, $request);
				$dispatcher->dispatch(FOSUserEvents::PROFILE_EDIT_INITIALIZE, $event);

				if (null !== $event->getResponse()) {
					return $event->getResponse();
				}

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
						$url = $this->generateUrl('dudeego_platform_abonne_mesParametresMAIL');
						$response = new RedirectResponse($url);
					}

					$dispatcher->dispatch(FOSUserEvents::PROFILE_EDIT_COMPLETED, new FilterUserResponseEvent($user, $request, $response));

					return $response;
				}

				return $this->render('DUDEEGOPlatformBundle:back:mesparametresMAIL.html.twig', array(
					'form' => $form->createView(),
					));
			}
		} catch (Exception $e) {
			$this->addFlash('notice','J\ai glissé chef !.'. $e);
			return $this->render('DUDEEGOPlatformBundle:front:monprofil.html.twig');
		}
	}

	public function mesdocumentsAction(Request $request)
	{    
		try {
			if (!is_object($this->getUser()) || !$this->getUser() instanceof UserInterface) {
				throw new AccessDeniedException('Accès à cette page, le droit tu n\'as pas.');
			}
			else {

				$user = $this->getUser();
				$em = $this->getDoctrine()->getManager();

				$physique = $em->getRepository('DUDEEGOPlatformBundle:EA_Physique')->findOneById($user->getPhysique()->getId());		

				$form = $this->createform(EA_PhysiqueType::class, $physique);
				$form->handleRequest($request);

				if ($form->isSubmitted() && $form->isValid()) {

					$physique = $form->getData();
					//$physique->$documents->setUpdatedAt(new \DateTime('now'));
					$em->persist($physique);
					$em->flush();

					$this->addFlash('notice','Documents bien enregistrée.');
					return $this->redirectToRoute('dudeego_platform_abonne_mesDocuments');
				}

				return $this->render('DUDEEGOPlatformBundle:back:mesdocuments.html.twig', array(
					'form' => $form->createView(),
					'physique' => $physique,
					));
			}
		} catch (Exception $e) {
			$this->addFlash('notice','J\ai glissé chef !.'. $e);
			return $this->render('DUDEEGOPlatformBundle:front:monprofil.html.twig');
		}
	}

	public function mesdemandesAction()
	{    
		try {
			if (!is_object($this->getUser()) || !$this->getUser() instanceof UserInterface) {
				throw new AccessDeniedException('Accès à cette page, le droit tu n\'as pas.');
			}
			else {
				$user = $this->getUser();
				$em = $this->getDoctrine()->getManager();
				$physique = $em->getRepository('DUDEEGOPlatformBundle:EA_Physique')->findOneById($user->getPhysique()->getId());
				$listDemandeInscription = $em->getRepository('DUDEEGOPlatformBundle:EA_Demande_Inscription')->getDemandesIncriptions($physique->getId());

				return $this->render('DUDEEGOPlatformBundle:back:mesdemandes.html.twig', array(
					'listDemandeInscription' => $listDemandeInscription,
					));		
			}
		} catch (Exception $e) {
			$this->addFlash('notice','J\ai glissé chef !.'. $e);
			return $this->render('DUDEEGOPlatformBundle:front:monprofil.html.twig');
		}
	}

	public function detailsdemandesAction(EA_Demande_Inscription $eA_Demande_Inscription)
	{    
		try {
			if (!is_object($this->getUser()) || !$this->getUser() instanceof UserInterface) {
				throw new AccessDeniedException('Accès à cette page, le droit tu n\'as pas.');
			}
			else {
				return $this->render('DUDEEGOPlatformBundle:back:detailsdemandes.html.twig', array(
					'eA_Demande_Inscription' => $eA_Demande_Inscription,
					));
			}
		} catch (Exception $e) {
			$this->addFlash('notice','J\ai glissé chef !.'. $e);
			return $this->render('DUDEEGOPlatformBundle:front:monprofil.html.twig');
		}
	}

	public function modifierdemandesAction(Request $request, EA_Demande_Inscription $eA_Demande_Inscription)
	{    
		try {
			if (!is_object($this->getUser()) || !$this->getUser() instanceof UserInterface) {
				throw new AccessDeniedException('Accès à cette page, le droit tu n\'as pas.');
			}
			else {
				if (isset($eA_Demande_Inscription)) {
					$type = $eA_Demande_Inscription->getType();
					$etat = $eA_Demande_Inscription->getEtat();
				}

				$editForm = $this->createForm('DUDEEGO\PlatformBundle\Form\EA_Demande_InscriptionType', $eA_Demande_Inscription);
				$editForm->handleRequest($request);

				if ($editForm->isSubmitted() && $editForm->isValid()) {

					$eA_Demande_Inscription->setType($type);
					$eA_Demande_Inscription->setEtat($etat);

					$this->getDoctrine()->getManager()->flush();
					$this->addFlash('notice','Modifcation bien enregistrée.');
					return $this->redirectToRoute('dudeego_platform_abonne_modifierDemandes', array('id' => $eA_Demande_Inscription->getId()));
				}

				return $this->render('DUDEEGOPlatformBundle:back:modifierdemandes.html.twig', array(
					'eA_Demande_Inscription' => $eA_Demande_Inscription,
					'edit_form' => $editForm->createView(),
					));
			}
		} catch (Exception $e) {
			$this->addFlash('notice','J\ai glissé chef !.'. $e);
			return $this->render('DUDEEGOPlatformBundle:front:monprofil.html.twig');
		}
	}

	public function aideAction()
	{    
		try {
			if (!is_object($this->getUser()) || !$this->getUser() instanceof UserInterface) {
				throw new AccessDeniedException('Accès à cette page, le droit tu n\'as pas.');
			}
			else {
				$em = $this->getDoctrine()->getManager();
				$listFAQ = $em->getRepository('DUDEEGOPlatformBundle:EA_FAQ')->findAll();

				return $this->render('DUDEEGOPlatformBundle:back:aide.html.twig', array(
					'listFAQ' => $listFAQ,
					));		
			}
		} catch (Exception $e) {
			$this->addFlash('notice','J\ai glissé chef !.'. $e);
			return $this->render('DUDEEGOPlatformBundle:front:monprofil.html.twig');
		}
	}

	public function contactAction(Request $request)
	{
		try {
			if (!is_object($this->getUser()) || !$this->getUser() instanceof UserInterface) {
				throw new AccessDeniedException('Accès à cette page, le droit tu n\'as pas.');
			}
			else {
        // Create the form according to the FormType created previously.
        // And give the proper parameters
				$form = $this->createForm('DUDEEGO\PlatformBundle\Form\ContactType',null,array(
            // To set the action use $this->generateUrl('route_identifier')
					'action' => $this->generateUrl('dudeego_platform_abonne_contact'),
					'method' => 'POST'
					));

				if ($request->isMethod('POST')) {
            // Refill the fields in case the form is not valid.
					$form->handleRequest($request);

					if($form->isValid()){
                // Send mail
						if($this->sendEmail($form->getData())){

                    // Everything OK, redirect to wherever you want ! :
							$this->addFlash('notice','Email envoyé.');
							return $this->redirectToRoute('dudeego_platform_abonne_contact');
						}else{
                    // An error ocurred, handle
							var_dump("Errooooor :(");
						}
					}
				}

				return $this->render('DUDEEGOPlatformBundle:back:contact.html.twig', array(
					'form' => $form->createView()
					));
			}
		} catch (Exception $e) {
			$this->addFlash('notice','J\ai glissé chef !.'. $e);
			return $this->render('DUDEEGOPlatformBundle:front:monprofil.html.twig');
		}
	}

	private function sendEmail($data){

		$message = \Swift_Message::newInstance()
		->setSubject($data["subject"])
		->setFrom('dudeego.contact@gmail.com')
		->setTo($data["email"])
		->setBody($data["message"])
		;

		return $this->get('mailer')->send($message);
	}

	public function universiteOneAction(Request $request)
	{    
		try {
			if (!is_object($this->getUser()) || !$this->getUser() instanceof UserInterface) {
				throw new AccessDeniedException('Accès à cette page, le droit tu n\'as pas.');
			}
			else {
				$user = $this->getUser();
				$em = $this->getDoctrine()->getManager();

				$form = $this->createform(InscriptionUniversiteType::class);
				$form->handleRequest($request);

				if ($form->isSubmitted() && $form->isValid()) {
					#recherche le PDF
					if ($form->get('nometablissement')->getData() !== null) {
						$formation = $form->get('formation')->getData()->getFormation();
						$langue = $form->get('langue')->getData()->getLangue();
						$nometablissement = $form->get('nometablissement')->getData()->getNomEtablissement();

						$universiteId = $form->get('nometablissement')->getData()->getId();

						$document = $em->getRepository('DUDEEGOPlatformBundle:T_Document_Universite')
						->getDocumentIncription($universiteId);

						return $this->render('DUDEEGOPlatformBundle:back:universiteTwo.html.twig', array(
							'form' => $form->createView(),
							'document' => $document,
							));	
					}
				}

				return $this->render('DUDEEGOPlatformBundle:back:universiteOne.html.twig', array(
					'form' => $form->createView(),
					));	
			}
		} catch (Exception $e) {
			$this->addFlash('notice','J\ai glissé chef !.'. $e);
			return $this->render('DUDEEGOPlatformBundle:front:monprofil.html.twig');
		}
	}

	public function universiteTwoAction(Request $request)
	{    
		try {
			if (!is_object($this->getUser()) || !$this->getUser() instanceof UserInterface) {
				throw new AccessDeniedException('Accès à cette page, le droit tu n\'as pas.');
			}
			else {
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

					$em = $this->getDoctrine()->getManager();
					$em->persist($eA_Demande_Inscription);
					$em->flush();

					$email = $user->getEmail();
					$utilisateur = $user->getUserName();
					$typeInscription = $eA_Demande_Inscription->getType();

					$message = \Swift_Message::newInstance();
					$message->setSubject('Inscription à ' . $eA_Demande_Inscription->getType());
					$message->setFrom('dudeego.contact@gmail.com');
					$message->setTo($email);
					$message->setBody('Information : l\'utilisateur '. $utilisateur . ' souhaite s\'inscrire à ' . $typeInscription);
					//$message->attach(Swift_Attachment::fromPath('my-document.pdf'));
					$this->get('mailer')->send($message);

					return $this->redirectToRoute('dudeego_platform_abonne_mesDemandes');
				}

				return $this->render('DUDEEGOPlatformBundle:back:universiteThree.html.twig', array(
					'eA_Demande_Inscription' => $eA_Demande_Inscription,
					'form' => $form->createView(),
					));
			}
		} catch (Exception $e) {
			$this->addFlash('notice','J\ai glissé chef !.'. $e);
			return $this->render('DUDEEGOPlatformBundle:front:monprofil.html.twig');
		}
	}


	public function langueOneAction(Request $request)
	{    
		try {
			if (!is_object($this->getUser()) || !$this->getUser() instanceof UserInterface) {
				throw new AccessDeniedException('Accès à cette page, le droit tu n\'as pas.');
			}
			else {
				$user = $this->getUser();
				$em = $this->getDoctrine()->getManager();

				$form = $this->createform(InscriptionType::class);
		//dump($form);exit();
				$form->handleRequest($request);

				if ($form->isSubmitted() && $form->isValid()) {
			#recherche le PDF
					if ($form->get('raisonsocial')->getData()->getRaisonSocial() !== null) {
						$raisonsocial = $form->get('raisonsocial')->getData()->getRaisonSocial();
						$raisonSocialId = $form->get('raisonsocial')->getData()->getId();

						$document = $em->getRepository('DUDEEGOPlatformBundle:T_Document_Universite')
						->getDocumentIncription($raisonSocialId);

						return $this->render('DUDEEGOPlatformBundle:back:langueTwo.html.twig', array(
							'form' => $form->createView(),
							'document' => $document,
							));	
					}
				}

				return $this->render('DUDEEGOPlatformBundle:back:langueOne.html.twig', array(
					'form' => $form->createView(),
					));	
			}
		} catch (Exception $e) {
			$this->addFlash('notice','J\ai glissé chef !.'. $e);
			return $this->render('DUDEEGOPlatformBundle:front:monprofil.html.twig');
		}
	}

	public function langueTwoAction(Request $request)
	{    
		try {
			if (!is_object($this->getUser()) || !$this->getUser() instanceof UserInterface) {
				throw new AccessDeniedException('Accès à cette page, le droit tu n\'as pas.');
			}
			else {
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

					$email = $user->getEmail();
					$utilisateur = $user->getUserName();
					$typeInscription = $eA_Demande_Inscription->getType();

					$message = \Swift_Message::newInstance();
					$message->setSubject('Inscription à ' . $eA_Demande_Inscription->getType());
					$message->setFrom('dudeego.contact@gmail.com');
					$message->setTo($email);
					$message->setBody('Information : l\'utilisateur '. $utilisateur . ' souhaite s\'inscrire à ' . $typeInscription);
					//$message->attach(Swift_Attachment::fromPath('my-document.pdf'));
					$this->get('mailer')->send($message);

					return $this->redirectToRoute('dudeego_platform_abonne_mesDemandes');
				}

				return $this->render('DUDEEGOPlatformBundle:back:langueThree.html.twig', array(
					'eA_Demande_Inscription' => $eA_Demande_Inscription,
					'form' => $form->createView(),
					));

			}
		} catch (Exception $e) {
			$this->addFlash('notice','J\ai glissé chef !.'. $e);
			return $this->render('DUDEEGOPlatformBundle:front:monprofil.html.twig');
		}
	}

	public function logementOneAction(Request $request)
	{    

		try {
			if (!is_object($this->getUser()) || !$this->getUser() instanceof UserInterface) {
				throw new AccessDeniedException('Accès à cette page, le droit tu n\'as pas.');
			}
			else {
				$user = $this->getUser();
				$em = $this->getDoctrine()->getManager();

				$form = $this->createform(InscriptionType::class);
				$form->handleRequest($request);

				if ($form->isSubmitted() && $form->isValid()) {
				#recherche le PDF
					if ($form->get('nometablissement')->getData()->getNomEtablissement() !== null) {
						$nometablissement = $form->get('nometablissement')->getData()->getNomEtablissement();
						$universiteId = $form->get('nometablissement')->getData()->getId();

						$document = $em->getRepository('DUDEEGOPlatformBundle:T_Document_Universite')
						->getDocumentIncription($universiteId);

						return $this->render('DUDEEGOPlatformBundle:back:logementTwo.html.twig', array(
							'form' => $form->createView(),
							'document' => $document,
							));	
					}
				}

				return $this->render('DUDEEGOPlatformBundle:back:logementOne.html.twig', array(
					'form' => $form->createView(),
					));	
			}
		} catch (Exception $e) {
			$this->addFlash('notice','J\ai glissé chef !.'. $e);
			return $this->render('DUDEEGOPlatformBundle:front:monprofil.html.twig');
		}
	}

	public function logementTwoAction(Request $request)
	{

		try {
			if (!is_object($this->getUser()) || !$this->getUser() instanceof UserInterface) {
				throw new AccessDeniedException('Accès à cette page, le droit tu n\'as pas.');
			}
			else {    
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

					$em = $this->getDoctrine()->getManager();
					$em->persist($eA_Demande_Inscription);
					$em->flush();

					$email = $user->getEmail();
					$utilisateur = $user->getUserName();
					$typeInscription = $eA_Demande_Inscription->getType();

					$message = \Swift_Message::newInstance();
					$message->setSubject('Inscription à ' . $eA_Demande_Inscription->getType());
					$message->setFrom('dudeego.contact@gmail.com');
					$message->setTo($email);
					$message->setBody('Information : l\'utilisateur '. $utilisateur . ' souhaite s\'inscrire à ' . $typeInscription);
					//$message->attach(Swift_Attachment::fromPath('my-document.pdf'));
					$this->get('mailer')->send($message);					

					return $this->redirectToRoute('dudeego_platform_abonne_mesDemandes');
				}

				return $this->render('DUDEEGOPlatformBundle:back:logementThree.html.twig', array(
					'eA_Demande_Inscription' => $eA_Demande_Inscription,
					'form' => $form->createView(),
					));
			}
		} catch (Exception $e) {
			$this->addFlash('notice','J\ai glissé chef !.'. $e);
			return $this->render('DUDEEGOPlatformBundle:front:monprofil.html.twig');
		}
	}

	public function preparationOneAction(Request $request)
	{    

		try {
			if (!is_object($this->getUser()) || !$this->getUser() instanceof UserInterface) {
				throw new AccessDeniedException('Accès à cette page, le droit tu n\'as pas.');
			}
			else {  
				$user = $this->getUser();
				$em = $this->getDoctrine()->getManager();

				$form = $this->createform(InscriptionType::class);
				$form->handleRequest($request);

				if ($form->isSubmitted() && $form->isValid()) {
				#recherche le PDF
					$typePreparation = $form->get('typePreparation')->getData();
				$universiteId = 1; //$form->get('typePreparation')->getData()->getId();

				$document = $em->getRepository('DUDEEGOPlatformBundle:T_Document_Universite')
				->getDocumentIncription($universiteId);

				return $this->render('DUDEEGOPlatformBundle:back:preparationTwo.html.twig', array(
					'form' => $form->createView(),
					'document' => $document,
					));	
			}

			return $this->render('DUDEEGOPlatformBundle:back:preparationOne.html.twig', array(
				'form' => $form->createView(),
				));	
		}
	} catch (Exception $e) {
		$this->addFlash('notice','J\ai glissé chef !.'. $e);
		return $this->render('DUDEEGOPlatformBundle:front:monprofil.html.twig');
	}
}

public function preparationTwoAction(Request $request)
{    

	try {
		if (!is_object($this->getUser()) || !$this->getUser() instanceof UserInterface) {
			throw new AccessDeniedException('Accès à cette page, le droit tu n\'as pas.');
		}
		else {  
			$eA_Demande_Inscription = new EA_Demande_Inscription();
			$form = $this->createForm('DUDEEGO\PlatformBundle\Form\EA_Demande_InscriptionType', $eA_Demande_Inscription);
			$form->handleRequest($request);

			if ($form->isSubmitted() && $form->isValid()) {

				$user = $this->getUser();
				$em = $this->getDoctrine()->getManager();
				$physique = $em->getRepository('DUDEEGOPlatformBundle:EA_Physique')->findOneById($user->getPhysique()->getId());
				$eA_Demande_Inscription->setPhysique($physique);
				$eA_Demande_Inscription->setType('preparation');
				$eA_Demande_Inscription->setEtat('creation');

				$em = $this->getDoctrine()->getManager();
				$em->persist($eA_Demande_Inscription);
				$em->flush();

				$email = $user->getEmail();
				$utilisateur = $user->getUserName();
				$typeInscription = $eA_Demande_Inscription->getType();

				$message = \Swift_Message::newInstance();
				$message->setSubject('Inscription à ' . $eA_Demande_Inscription->getType());
				$message->setFrom('dudeego.contact@gmail.com');
				$message->setTo($email);
				$message->setBody('Information : l\'utilisateur '. $utilisateur . ' souhaite s\'inscrire à ' . $typeInscription);
				//$message->attach(Swift_Attachment::fromPath('my-document.pdf'));
				$this->get('mailer')->send($message);

				return $this->redirectToRoute('dudeego_platform_abonne_mesDemandes');
			}

			return $this->render('DUDEEGOPlatformBundle:back:preparationThree.html.twig', array(
				'eA_Demande_Inscription' => $eA_Demande_Inscription,
				'form' => $form->createView(),
				));
		}
	} catch (Exception $e) {
		$this->addFlash('notice','J\ai glissé chef !.'. $e);
		return $this->render('DUDEEGOPlatformBundle:front:monprofil.html.twig');
	}
}

public function mutuelleAction()
{    
	try {
		if (!is_object($this->getUser()) || !$this->getUser() instanceof UserInterface) {
			throw new AccessDeniedException('Accès à cette page, le droit tu n\'as pas.');
		}
		else {  
			$em = $this->getDoctrine()->getManager();
			$morale = $em->getRepository('DUDEEGOPlatformBundle:EA_Morale')->getMutuel('AVA');

			return $this->render('DUDEEGOPlatformBundle:back:mutuelle.html.twig', array(
				'morale' => $morale,
				));
		}
	} catch (Exception $e) {
		$this->addFlash('notice','J\ai glissé chef !.'. $e);
		return $this->render('DUDEEGOPlatformBundle:front:monprofil.html.twig');
	}
}
}