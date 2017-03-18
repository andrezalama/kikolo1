<?php

namespace projecto\KikoloBundle\Controller;
use projecto\KikoloBundle\Entity\Kikolo;
use projecto\KikoloBundle\Form\KikoloType;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function KikoloAction()
    {
        $em = $this->getDoctrine()->getManager();
        $entities= $em->getRepository("projectoKikoloBundle:Kikolo")->findAll();
        return $this->render('projectoKikoloBundle:Kikolo-Default:index.html.twig', array(
            "entities" =>$entities
        ));
    }
        public function kikoloshowAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('projectoKikoloBundle:Kikolo')->find($id);
        if (!$entities) {
            throw $this->createNotFoundException('Unable to find Anuncio entity.');
        }
        return $this->render('projectoKikoloBundle:Kikolo-portofolio:Portofolio-anuncio.html.twig', array(
            'entity'=> $entities ));
    }

}
