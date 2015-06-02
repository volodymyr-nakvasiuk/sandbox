<?php

namespace Application\Gillbus\EtravelsPagesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('EtravelsPagesBundle:Default:index.html.twig', array('name' => $name));
    }
}
