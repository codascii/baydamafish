<?php

namespace Baydamafish\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BaydamafishAppBundle:Default:index.html.twig');
    }
}
