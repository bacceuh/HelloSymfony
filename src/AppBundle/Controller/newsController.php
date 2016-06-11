<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class newsController extends Controller
{
    /**
     * @Route("/news")
     */
    public function newsAction(Request $req)
    {

	$sby = $req->get('sortby');
	$skip = (int) ($req->get('page'));
	if($skip < 0)
	    $skip = 0;
	$cnt = (int) ($req->get('count'));
	if($cnt < 1)
	    $cnt = 20;
	$skip *= $cnt;

	
	if($sby == 'caption')
	    $sby = 'n.caption ASC';
	else if($sby == 'date')
	    $sby = 'n.datetime ASC';
	else
	    $sby = 'n.id ASC';


	$news = $this->getDoctrine()->getManager()
		->createQuery('SELECT n FROM AppBundle:News n ORDER BY '.$sby)
		->setMaxResults($cnt)
		->setFirstResult($skip)
		    ->getResult();
	

	$answer = array();

	foreach($news as $one)
	    $answer[] = array($one->getId(), $one->getCaption(), $one->getDatetime()->format('Y-m-d H:i:s'));


	return new JsonResponse ($answer);

    }
}
