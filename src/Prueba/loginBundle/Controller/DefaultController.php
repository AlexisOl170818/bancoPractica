<?php

namespace Prueba\loginBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class DefaultController extends Controller{
    public function indexAction()
    {
        return $this->render('PruebaloginBundle:Default:index.html.twig');
    }
}
