<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('AppBundle:Default:index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
 
    public function headerAction(){
        return $this->render('header.html.twig');
    }
    
     public function sliderAction(){
        return $this->render('slider.html.twig');
    }
    
     public function addsAction(){
        return $this->render('adds.html.twig');
    }
    
    public function contactAction(){
        return $this->render('AppBundle:Default:contact.html.twig');
    }
    
    public function mailCheckAction(){
    $message = \Swift_Message::newInstance()
        ->setSubject('Hello Email')
        ->setFrom('anilgupta.itech@gmail.com')
        ->setTo('anil16@mailinator.com')
        ->setBody('You should see me from the profiler!')
    ;

    $this->get('mailer')->send($message);
   return new Response(
            '<html><body>Lucky number: 11</body></html>'
        );
  
    
    }
}
