<?php

namespace projecto\KikoloBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Httpfoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use projecto\KikoloBundle\Entity\Kikolo;
use projecto\KikoloBundle\Form\KikoloType;


/**
 * Kikolo-anuncio controller.
 */

class KikoloController extends Controller
{
    /**
     * Lists all Kikolo-anuncio entities.
     */

    public function anuncioAction()
    {
        return $this->render('projectoKikoloBundle:Kikolo-anuncio:Menu_anuncio.html.twig');
    }

    public function portofolioAction()
    {
        return $this->render('projectoKikoloBundle:Kikolo-portofolio:Portofolio-anuncio.html.twig');
    }

    /**
     * Creates a new Kikolo-anuncio entity.
     */

    #############################################################################################
    public function newAction(Request $request)
    {
        $entities = new Kikolo();
        $form = $this->createForm('projecto\KikoloBundle\Form\KikoloType', $entities);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entities->upload();
            $em->persist($entities);
            $em->flush();

            return $this->render('projectoKikoloBundle:Kikolo-anuncio:Menu_anuncio.html.twig');
        }

        return $this->render('projectoKikoloBundle:Kikolo-anuncio:Cadastra.html.twig', array(
            'entities' => $entities,
            'form' => $form->createView(),
        ));
    }

}
