<?php
/**
 * Created by PhpStorm.
 * User: donnie
 * Date: 22.05.15
 * Time: 16:39
 */

namespace Application\Gillbus\TicketsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PlaceController extends Controller
{
    public function indexAction()
    {
        return $this->render('TicketsBundle:Default:index.html.twig');
    }
}