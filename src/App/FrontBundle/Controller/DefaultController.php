<?php

namespace App\FrontBundle\Controller;

use AppBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $user = $this->getUser();
        return $this->render('AppFrontBundle:Default:index.html.twig', array(
            'user'  =>  $user,
        ));
    }

    public function usersAction()
    {
        $em = $this->getDoctrine()->getManager();
        $users = $em->getRepository('AppBundle:User')->findAll();
        return $this->render('Users/index.html.twig', array(
            'users' => $users,
        ));
    }
}
