<?php

namespace Application\Gillbus\EtravelsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ApplicationGillbusEtravelsBundle:Default:index.html.twig', array('name' => $name));
    }
}
