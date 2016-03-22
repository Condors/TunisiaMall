<?php

namespace Condors\TnMallBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Condors\TnMallBundle\Entity\Produit;
use Condors\TnMallBundle\Form\ProduitType;

/**
 * Description of ResponsableController
 *
 * @author HP
 */
class ResponsableController extends Controller {

    public function indexAction() {


        $user = $this->getUser();
        return $this->render('CondorsTnMallBundle:Responsable:index.html.twig', array(
            'user'=>$user,
        ));
    }
    
    public function productsAction() {

        $form = $this->createForm(new ProduitType());
        $user = $this->getUser();
        return $this->render('CondorsTnMallBundle:Responsable:GestionProduit.html.twig', array(
            'user'=>$user,
            'form'=>$form->createView(),
        ));
    }
    
    
    

}
