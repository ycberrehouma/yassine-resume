<?php

namespace yassineBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
class ajoutController extends Controller
{
    /**
     * @Route("/resume", name="resume")
     */


    public function yassineAction()
    {
        return $this->render('yassineBundle:Default:yassine.html.twig');
    }

    /**
     * @Route("/schedule", name="schedule")
     */
    public function scheduleAction(request $request)
    {
        $login = $this->getDoctrine()->getEntityManager()->getRepository('yassineBundle:Login')->findAll();

        return $this->render('yassineBundle:Default:test.html.twig', ['login' => $login]);
    }

    public function addAction(Request $request)
    {
        $login = new Login($request - ('username') . str_replace('.', '', $request->get('price')));

        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($login);
        $em->flush($login);

        return $this->redirectToRoute('schedule');

    }
}
