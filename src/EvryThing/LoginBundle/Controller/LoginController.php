<?php
// src/EvryThing/LoginBundle/Controller/LoginController.php

namespace EvryThing\LoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class LoginController extends Controller
{
  public function loginAction()
  {
		$request = $this->getRequest();
        $form = $this->createFormBuilder($request)
            ->add('password', 'password')
            ->add('connexion', 'submit')
            ->getForm();

        return $this->render('EvryThingLoginBundle:Login:login.html.twig', array(
            'form' => $form->createView()
        ));
  }
}