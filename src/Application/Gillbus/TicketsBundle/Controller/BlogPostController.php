<?php

namespace Application\Gillbus\TicketsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlogPostController extends Controller
{
    public function indexAction()
    {
        return $this->render('TicketsBundle:Default:index.html.twig');
    }
}
