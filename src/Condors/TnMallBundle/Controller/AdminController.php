<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AdminController
 *
 * @author Amin
 * 
 * 
 * 
 * 
 */

namespace Condors\TnMallBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Condors\TnMallBundle\Form\PackType;
use Condors\TnMallBundle\Entity\Pack;

class AdminController extends Controller {
/**/
    /**/
    /**/
    /**/
    public function indexAction() {

 
        $user = $this->getUser();
        return $this->render('CondorsTnMallBundle:Admin:index.html.twig', array(
                    'user' => $user,
        ));
    }

    public function gestionPackAction() {
        $user = $this->getUser();
        return $this->render('CondorsTnMallBundle:Admin:GestionPack.html.twig', array(
                    'user' => $user
        ));
    }
    
    
    
        public function modifyPackAction(Pack $pack) {

       
        $user = $this->getUser();
        $form = $this->createForm(new PackType(),$pack);
        
         $request = $this->getRequest();
         $em = $this->getDoctrine()->getManager();
      
         if ($request->getMethod() == 'POST') {
            //Note: bindRequest is now deprecated
            $form->bind($request);
            if ($form->isValid()) {
        
             
                $pack = $form->getData();
          

                $em->persist($pack);
                $em->flush();
                return $this->redirect($this->generateUrl("condors_tn_mall_Admin_displayPacks"));
            }
        }

        
        
        
        return $this->render('CondorsTnMallBundle:Admin:modifyPack.html.twig', array(
                    'user' => $user,'form'=>$form->createView()
        ));
    }
    
    
    
    public function addPackAction() {

       
        $user = $this->getUser();
        $form = $this->createForm(new PackType());
        
         $request = $this->getRequest();
         $em = $this->getDoctrine()->getManager();
      
         if ($request->getMethod() == 'POST') {
            //Note: bindRequest is now deprecated
            $form->bind($request);
            if ($form->isValid()) {
        
             
                $pack = $form->getData();
          

                $em->persist($pack);
                $em->flush();
            }
        }


        return $this->render('CondorsTnMallBundle:Admin:addPack.html.twig', array(
                    'user' => $user,'form'=>$form->createView()
        ));
    }
    
    
    
    public function displayPacksAction() {
        
        $user = $this->getUser(); 
        $em = $this->getDoctrine()->getManager() ; 
        $allPacks = $em->getRepository("CondorsTnMallBundle:Pack")->findAll();
       return $this->render('CondorsTnMallBundle:Admin:displayPacks.html.twig',array(
           'user'=>$user, 'allPacks' => $allPacks
           
               
       ));
    }
    
    
    public function removePackAction(Pack $pack) {
        
        $em = $this->getDoctrine()->getManager();
        $em->remove($pack);
        $em->flush();
        return $this->redirect($this->generateUrl("condors_tn_mall_Admin_displayPacks"));
        
        
    }
    
    
    public function testAction(){
        
        return $this->render('CondorsTnMallBundle:Admin:test.html.twig', array()) ;
    }


    
    
    

}
