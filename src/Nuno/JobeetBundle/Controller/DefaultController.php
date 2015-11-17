<?php

namespace Nuno\JobeetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('NunoJobeetBundle:Default:index.html.twig', array('name' => $name));
    }
}
