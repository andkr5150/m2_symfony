<?php

namespace andkr\m2_symfonyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('andkrm2_symfonyBundle:Default:index.html.twig');
    }
}
