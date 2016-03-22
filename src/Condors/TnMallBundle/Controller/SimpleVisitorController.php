<?php

namespace Condors\TnMallBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SimpleVisitorController extends Controller
{
    public function indexAction()
    {
        return $this->render('CondorsTnMallBundle:SimpleVisitor:index.html.twig');
    }
    
    public function showNewProductAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $newProduit = $em->getRepository("CondorsTnMallBundle:Produit")->findNewProd();
        return $this->render('CondorsTnMallBundle:SimpleVisitor:index.html.twig' , array(
            'newProduit' => $newProduit,
        ));
    }
    
    public function shopDetailAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $produitDetail = $em->getRepository("CondorsTnMallBundle:Produit")->findProdbyId($id);
        $produitRelated = $em->getRepository("CondorsTnMallBundle:Produit")->findProdRelated($produitDetail->getCategorieProduit());
        return $this->render('CondorsTnMallBundle:SimpleVisitor:ShopDetail.html.twig' , array(
            'produitDetail' => $produitDetail,
            'produitRelated' => $produitRelated,
        ));
    }
}
