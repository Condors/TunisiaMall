<?php

namespace Condors\TnMallBundle\Controller;

use Condors\TnMallBundle\Entity\Panier;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Cookie;

class SimpleVisitorController extends Controller
{

    public function indexAction()
    {
        return $this->render('CondorsTnMallBundle:SimpleVisitor:index.html.twig');
    }

    public function brandsAction()
    {

        $em = $this->getDoctrine()->getManager();


        $brands = $em->getRepository("CondorsTnMallBundle:Enseigne")->findAll();

        return $this->render('CondorsTnMallBundle:SimpleVisitor:brands.html.twig', array(
            'brands' => $brands,
        ));
    }

    public function brandsSpecAction($id)
    {
        $em = $this->getDoctrine()->getManager();


        $brand = $em->getRepository("CondorsTnMallBundle:Enseigne")->findBrandbyIdBrand($id);

        $catalogProds = $em->getRepository("CondorsTnMallBundle:Enseigne")->findBrandCatalog($id);

        return $this->render('CondorsTnMallBundle:SimpleVisitor:brandsMiniWebSite.html.twig', array(
            'brand' => $brand,
            'catalogs' => $catalogProds,


        ));
    }

    public function showNewProductAction()
    {
        $user = $this->getUser();
        $em = $this->getDoctrine()->getEntityManager();
        $newProduit = $em->getRepository("CondorsTnMallBundle:Produit")->findNewProd();
        $counter = 0;

        if (!empty($user)) {
            $allPans = $em->getRepository("CondorsTnMallBundle:Panier")->findOneByidClient($user->getId());


            if (empty($allPans)) {
                $panier = New Panier();
                $panier->setIdClient($user->getId());
                $em->persist($panier);
                $em->flush();
            }
        }
        return $this->render('CondorsTnMallBundle:SimpleVisitor:index.html.twig', array(
            'newProduit' => $newProduit,
        ));
    }

    public function shopDetailAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $produitDetail = $em->getRepository("CondorsTnMallBundle:Produit")->findProdbyId($id);
        $produitRelated = $em->getRepository("CondorsTnMallBundle:Produit")->findProdRelated($produitDetail->getCategorieProduit());


        return $this->render('CondorsTnMallBundle:SimpleVisitor:ShopDetail.html.twig', array(
            'produitDetail' => $produitDetail,
            'produitRelated' => $produitRelated,

        ));
    }

    public function showAboutAction()
    {
        $name='name';
        return $this->render('CondorsTnMallBundle:SimpleVisitor:About.html.twig', array(
            'name' => $name,
        ));
    }

    public function showContactAction()
    {
        $name='name';
        return $this->render('CondorsTnMallBundle:SimpleVisitor:Contact.html.twig', array(
            'name' => $name,
        ));

    }

    public function showFaqAction()
    {

        $name='name';
        return $this->render('CondorsTnMallBundle:SimpleVisitor:Faq.html.twig', array(
            'name' => $name,
        ));
    }


    public function searchProdSimpleOrderAction($id, $txtSearch)
    {
        $em = $this->getDoctrine()->getManager();

        $prods = $em->getRepository("CondorsTnMallBundle:Produit")->findProdOrder($id, $txtSearch);
        $rep = new JsonResponse(($prods));

        return $rep;
    }

    public function AddPanierAction($id)
    {
        $user = $this->getUser();
        $em = $this->getDoctrine()->getEntityManager();
        //$allPans = $em->getRepository("CondorsTnMallBundle:Panier")->findOneByidClient($user->getId());

        $myProd = $em->getRepository("CondorsTnMallBundle:Produit")->findOneByidProduit($id);
        $response = new Response();
        //foreach ($myProd as  $value) {


        $request = $this->get('request');
        $cookies = $request->cookies;

        if ($cookies->has('numProd')) {
            $numProd = $cookies->get('numProd');
            $numProd++;
        } else {
            $numProd = 1;
        }
        $response->headers->setCookie(new Cookie('numProd', $numProd));

        $response->headers->setCookie(new Cookie('idProduit_' . $numProd, $myProd->getIdProduit()));
        $response->headers->setCookie(new Cookie('idCatalogue_' . $numProd, $myProd->getIdCatalogue()->getIdCatalogue()));
        $response->headers->setCookie(new Cookie('idPromotion_' . $numProd, $myProd->getIdPromotion()));
        $response->headers->setCookie(new Cookie('libelleProduit_' . $numProd, $myProd->getLibelleProduit()));
        $response->headers->setCookie(new Cookie('CategorieProduit_' . $numProd, $myProd->getCategorieProduit()));
        $response->headers->setCookie(new Cookie('refProduit_' . $numProd, $myProd->getRefProduit()));
        $response->headers->setCookie(new Cookie('descriptionProduit_' . $numProd, $myProd->getDescriptionProduit()));
        $response->headers->setCookie(new Cookie('tvaProduit_' . $numProd, $myProd->getTvaProduit()));
        $response->headers->setCookie(new Cookie('prixProduit_' . $numProd, $myProd->getPrixProduit()));
        $response->headers->setCookie(new Cookie('imageprodback_' . $numProd, $myProd->getImageprodback()));
        $response->headers->setCookie(new Cookie('imageprodreel_' . $numProd, $myProd->getImageprodreel()));


        //}
        $response->send();

        return $this->redirect($this->generateUrl("condors_tn_mall_homepageNewProd"));


    }



    public function UserConnectAction()
    {
    }
}
