<?php

namespace projecto\KikoloBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use projecto\KikoloBundle\Entity\Anuncio;
use projecto\KikoloBundle\Form\AnuncioType;

/**
 * Anuncio controller.
 *
 */
class AnuncioController extends Controller
{
    /**
     * Lists all Anuncio entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        //s$anuncios = $em->getRepository('projectoKikoloBundle:Anuncio')->findAll();
        return $this->render('anuncio/index.html.twig');
    }

    /**
     * Creates a new Anuncio entity.
     *
     */
    public function newAction(Request $request)
    {
        $anuncio = new Anuncio();
        $form = $this->createForm('projecto\KikoloBundle\Form\AnuncioType', $anuncio);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($anuncio);
            $em->flush();

            return $this->redirectToRoute('anuncio_show', array('id' => $anuncio->getId()));
        }

        return $this->render('anuncio/new.html.twig', array(
            'anuncio' => $anuncio,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Anuncio entity.
     *
     */
    public function showAction(Anuncio $anuncio)
    {
        $deleteForm = $this->createDeleteForm($anuncio);

        return $this->render('anuncio/show.html.twig', array(
            'anuncio' => $anuncio,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Anuncio entity.
     *
     */
    public function editAction(Request $request, Anuncio $anuncio)
    {
        $deleteForm = $this->createDeleteForm($anuncio);
        $editForm = $this->createForm('projecto\KikoloBundle\Form\AnuncioType', $anuncio);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($anuncio);
            $em->flush();

            return $this->redirectToRoute('anuncio_edit', array('id' => $anuncio->getId()));
        }

        return $this->render('anuncio/edit.html.twig', array(
            'anuncio' => $anuncio,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Anuncio entity.
     *
     */
    public function deleteAction(Request $request, Anuncio $anuncio)
    {
        $form = $this->createDeleteForm($anuncio);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($anuncio);
            $em->flush();
        }

        return $this->redirectToRoute('anuncio_index');
    }

    /**
     * Creates a form to delete a Anuncio entity.
     *
     * @param Anuncio $anuncio The Anuncio entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Anuncio $anuncio)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('anuncio_delete', array('id' => $anuncio->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
