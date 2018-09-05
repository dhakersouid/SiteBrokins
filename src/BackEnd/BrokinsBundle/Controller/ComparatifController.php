<?php

namespace BackEnd\BrokinsBundle\Controller;

use BackEnd\BrokinsBundle\Entity\Comparatif;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Comparatif controller.
 *
 * @Route("brokins_comparatif")
 */
class ComparatifController extends Controller
{
    /**
     * Lists all comparatif entities.
     *
     * @Route("/", name="brokins_comparatif_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $comparatifs = $em->getRepository('BackEndBrokinsBundle:Comparatif')->findAll();

        return $this->render('comparatif/index.html.twig', array(
            'comparatifs' => $comparatifs,
        ));
    }

    /**
     * Creates a new comparatif entity.
     *
     * @Route("/new", name="brokins_comparatif_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $comparatif = new Comparatif();
        $form = $this->createForm('BackEnd\BrokinsBundle\Form\ComparatifType', $comparatif);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($comparatif);
            $em->flush();

            return $this->redirectToRoute('brokins_comparatif_show', array('id' => $comparatif->getId()));
        }

        return $this->render('comparatif/new.html.twig', array(
            'comparatif' => $comparatif,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a comparatif entity.
     *
     * @Route("/{id}", name="brokins_comparatif_show")
     * @Method("GET")
     */
    public function showAction(Comparatif $comparatif)
    {
        $deleteForm = $this->createDeleteForm($comparatif);

        return $this->render('comparatif/show.html.twig', array(
            'comparatif' => $comparatif,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing comparatif entity.
     *
     * @Route("/{id}/edit", name="brokins_comparatif_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Comparatif $comparatif)
    {
        $deleteForm = $this->createDeleteForm($comparatif);
        $editForm = $this->createForm('BackEnd\BrokinsBundle\Form\ComparatifType', $comparatif);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('brokins_comparatif_edit', array('id' => $comparatif->getId()));
        }

        return $this->render('comparatif/edit.html.twig', array(
            'comparatif' => $comparatif,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a comparatif entity.
     *
     * @Route("/{id}", name="brokins_comparatif_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Comparatif $comparatif)
    {
        $form = $this->createDeleteForm($comparatif);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($comparatif);
            $em->flush();
        }

        return $this->redirectToRoute('brokins_comparatif_index');
    }

    /**
     * Creates a form to delete a comparatif entity.
     *
     * @param Comparatif $comparatif The comparatif entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Comparatif $comparatif)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('brokins_comparatif_delete', array('id' => $comparatif->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
