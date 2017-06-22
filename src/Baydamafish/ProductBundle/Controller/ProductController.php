<?php

namespace Baydamafish\ProductBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class ProductController extends Controller
{
    public function indexAction()
    {
    	$content = $this->get('templating')->render('BaydamafishProductBundle:Product:index.html.twig');
        return new Response($content);
    }

    public function newAction()
    {
    	return $this->render('BaydamafishProductBundle:Product:new.html.twig');
    }

    public function recommendedAction()
    {
    	return $this->render('BaydamafishProductBundle:Product:recommended.html.twig');
    }

    public function reserveAction()
    {
    	return $this->render('BaydamafishProductBundle:Product:reserve.html.twig');
    }
}
