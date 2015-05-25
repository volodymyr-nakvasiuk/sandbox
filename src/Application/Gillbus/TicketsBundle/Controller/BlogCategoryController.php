<?php
/**
 * Created by PhpStorm.
 * User: donnie
 * Date: 25.05.15
 * Time: 9:06
 */

namespace Application\Gillbus\TicketsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlogCategoryController extends Controller
{

    public function indexAction()
    {
        return $this->render('TicketsBundle:Default:index.html.twig');
    }

}