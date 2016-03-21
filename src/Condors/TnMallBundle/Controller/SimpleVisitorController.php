<?php

namespace Condors\TnMallBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SimpleVisitorController extends Controller
{
    public function indexAction()
    {
        return $this->render('CondorsTnMallBundle:SimpleVisitor:index.html.twig');
    }
}
