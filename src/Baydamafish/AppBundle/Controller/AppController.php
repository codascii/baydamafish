<?php

namespace Baydamafish\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AppController extends Controller
{
    public function indexAction()
    {
        return $this->render('BaydamafishAppBundle:App:index.html.twig');
    }

    public function aboutAction()
    {
    	return $this->render('BaydamafishAppBundle:App:about.html.twig');
    }

    public function helpAction()
    {
    	return $this->render('BaydamafishAppBundle:App:help.html.twig');
    }

    public function contactAction()
    {
    	return $this->render('BaydamafishAppBundle:App:contact.html.twig');
    }
}
