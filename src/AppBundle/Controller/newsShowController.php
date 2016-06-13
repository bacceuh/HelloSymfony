<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class newsShowController extends Controller
{
    /**
     * @Route("/news/show/{id}")
     */
    public function newsShowAction($id)
    {

	$news = $this->getDoctrine()->getRepository('AppBundle:News')->find($id);

	if($news === NULL)
	{
	    $resp = new Response('News not found');
	    $resp->setStatusCode('404');
	    return $resp;
	}
	    //throw $this->createNotFoundException('News not found');
//		return new JsonResponse('No data exists');

	$data = array($news->getCaption(), $news->getContent());

	return new JsonResponse ($data);

    }
}
