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
                    'user' => $user,
        ));
    }

    public function productsAction() {

        $em = $this->getDoctrine()->getManager();

        $allProds = $em->getRepository("CondorsTnMallBundle:Produit")->findAll();

        $form = $this->createForm(new ProduitType());
        $user = $this->getUser();

        $prod = new Produit();
        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
            //Note: bindRequest is now deprecated
            $form->bind($request);
            if ($form->isValid()) {
                //retrieve your model hydrated with your form values
                //has upload file ?
                $prod = $form->getData();
                if (($prod instanceof UploadedFile) && ($prod > getError() == '0')) {
                    $prod->uploadProfilePicture();
                }

                $em->persist($prod);
                $em->flush();
            }
        }




        return $this->render('CondorsTnMallBundle:Responsable:GestionProduit.html.twig', array(
                    'user' => $user,
                    'form' => $form->createView(),
                    'allprods' => $allProds,
        ));
    }

    public function modifyAction(Produit $prods) {

        if ($this->container->has('profiler')) {
            $this->container->get('profiler')->disable();
        }

        $em = $this->getDoctrine()->getManager();


        $form = $this->createForm(new ProduitType(), $prods);

        $user = $this->getUser();


        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
            //Note: bindRequest is now deprecated
            $form->bind($request);
            if ($form->isValid()) {
                //retrieve your model hydrated with your form values
                //has upload file ?
                $prod = $form->getData();
                if (($prod instanceof UploadedFile) && ($prod > getError() == '0')) {
                    $prod->uploadProfilePicture();
                }

                $em->persist($prod);
                $em->flush();
            }
        }




        return $this->render('CondorsTnMallBundle:Responsable:GestionProduitModifer.html.twig', array(
                    'user' => $user,
                    'form' => $form->createView(),
                    'prods' => $prods,
        ));
    }

    public function deleteAction(Produit $prods) {



        $em = $this->getDoctrine()->getManager();
        $em->remove($prods);
        $em->flush();



        return $this->redirect($this->generateUrl("condors_tn_mall_responsable_produit"));
    }

}
