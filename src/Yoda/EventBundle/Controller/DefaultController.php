<?php

namespace Yoda\EventBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction($count, $firstName)
    {
        //return $this->render('EventBundle:Default:index.html.twig', array('firstname' => $firstname));
      /*$arr = array (
            'firstName' =>  $firstName,
            'count'     =>  $count,
            'status'    =>  'It\'s a traaaaaaaap!');
      $response = new Response(json_encode($arr));
      $response->headers->set('Content-Type', 'application/json');
      return $response;*/

      /*$templating = $this->container->get('templating');
      return $templating->renderResponse(
        'EventBundle:Default:index.html.twig',
         array('name' => $firstName));*/

      return $this->render(
        'EventBundle:Default:index.html.twig', 
        array('name' => $firstName, 'count' => $count));
    }
}
