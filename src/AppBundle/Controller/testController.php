<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class testController extends Controller
{
    /**
     * @Route("/test")
     */
    public function testAction(Request $req)
    {

	
        // replace this example code with whatever you need
//        return $this->render('default/index.html.twig', array(
//            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
//        ));

	


	$toecho = 'hello';



	if($req->get('a') == 'b')
	    $toecho = 'fdfs';

	return new Response ($toecho);

    }
}
