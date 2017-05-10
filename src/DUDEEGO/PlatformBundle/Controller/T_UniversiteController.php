<?php

namespace DUDEEGO\PlatformBundle\Controller;

use DUDEEGO\PlatformBundle\Entity\T_Universite;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * T_universite controller.
 *
 * @Route("t_universite")
 */
class T_UniversiteController extends Controller
{
    /**
     * Lists all t_Universite entities.
     *
     * @Route("/", name="t_universite_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $t_Universites = $em->getRepository('DUDEEGOPlatformBundle:T_Universite')->findAll();

        return $this->render('t_universite/index.html.twig', array(
            't_Universites' => $t_Universites,
        ));
    }

    /**
     * Creates a new t_Universite entity.
     *
     * @Route("/new", name="t_universite_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $t_Universite = new T_universite();
        $form = $this->createForm('DUDEEGO\PlatformBundle\Form\T_UniversiteType', $t_Universite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($t_Universite);
            $em->flush();

            return $this->redirectToRoute('t_universite_show', array('id' => $t_Universite->getId()));
        }

        return $this->render('t_universite/new.html.twig', array(
            't_Universite' => $t_Universite,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a t_Universite entity.
     *
     * @Route("/{id}", name="t_universite_show")
     * @Method("GET")
     */
    public function showAction(T_Universite $t_Universite)
    {
        $deleteForm = $this->createDeleteForm($t_Universite);

        return $this->render('t_universite/show.html.twig', array(
            't_Universite' => $t_Universite,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing t_Universite entity.
     *
     * @Route("/{id}/edit", name="t_universite_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, T_Universite $t_Universite)
    {
        $deleteForm = $this->createDeleteForm($t_Universite);
        $editForm = $this->createForm('DUDEEGO\PlatformBundle\Form\T_UniversiteType', $t_Universite);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('t_universite_edit', array('id' => $t_Universite->getId()));
        }

        return $this->render('t_universite/edit.html.twig', array(
            't_Universite' => $t_Universite,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a t_Universite entity.
     *
     * @Route("/{id}", name="t_universite_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, T_Universite $t_Universite)
    {
        $form = $this->createDeleteForm($t_Universite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($t_Universite);
            $em->flush();
        }

        return $this->redirectToRoute('t_universite_index');
    }

    /**
     * Creates a form to delete a t_Universite entity.
     *
     * @param T_Universite $t_Universite The t_Universite entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(T_Universite $t_Universite)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('t_universite_delete', array('id' => $t_Universite->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
