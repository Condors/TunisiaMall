<?php

namespace Condors\TnMallBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SimpleVisitorController extends Controller
{
    public function myAccountAction()
    {
        return $this->render('CondorsTnMallBundle:SimpleVisitor:my-account.html.twig');
    }
}
