<?php

namespace Condors\TnMallBundle\Controller;

use Condors\TnMallBundle\Entity\Panier;
use Condors\TnMallBundle\Entity\Transaction;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Cookie;

use Payum\Core\Request\GetHumanStatus;
use Symfony\Component\HttpFoundation\Request;

use Beelab\PaypalBundle\Paypal\Exception;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Endroid\QrCode\QrCode;
use Mremi\ContactBundle\Controller\ContactController as BaseContorller;

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

    public function showNewStoreAction()
    {
        $user = $this->getUser();
        $em = $this->getDoctrine()->getEntityManager();
        $newStore = $em->getRepository("CondorsTnMallBundle:Boutique")->findNewStore();
        $counter = 0;
        return $this->render('CondorsTnMallBundle:SimpleVisitor:indexx.html.twig', array(
            'newStore' => $newStore,
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
          return $this->render('CondorsTnMallBundle:SimpleVisitor:About.html.twig');

    }

    public function showFaqAction()
    {

        $name = 'name';
         $this->render('CondorsTnMallBundle:SimpleVisitor:Faq.html.twig', array(
            'name' => $name,
        ));
        return new Response(
            $this->get('knp_snappy.pdf')->getOutputFromHtml($name),
            200,
            array(
                'Content-Type'          => 'application/pdf',
                'Content-Disposition'   => 'attachment; filename="file.pdf"'
            )
        );
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
    
    public function storeAction()
    {
        return $this->render('CondorsTnMallBundle:SimpleVisitor:store.html.twig');
    }

    public function storeDetailAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $storeDetail = $em->getRepository("CondorsTnMallBundle:Boutique")->findStorebyId($id);
        $storeRelated = $em->getRepository("CondorsTnMallBundle:Boutique")->
        findStoreRelated($storeDetail->getCategorieBoutique());

        return $this->render('CondorsTnMallBundle:SimpleVisitor:StoreDetail.html.twig', array(
            'storeDetail' => $storeDetail,
            'storeRelated' => $storeRelated,
        ));
    }


    public function storelocatorAction()
    {
        $store = $this->getDoctrine()
             ->getRepository("CondorsTnMallBundle:Boutique")
                ->findAll();

        return $this->render('CondorsTnMallBundle:SimpleVisitor:Storelocator.html.twig', array('store' => $store));
    }

    #Stores 
    
    public function ShowPanierAction()
    {
        return $this->render('CondorsTnMallBundle:SimpleVisitor:Panier.html.twig');
    }
    
    public function paymentAction(Request $request)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $request = $this->get('request');
        $cookies = $request->cookies;

        $numProd = 0;
        $amount = 0;
        $FullArray = array();
        if ($cookies->has('numProd')) {
            $numProd = $cookies->get('numProd');
        }

        for ($i = 1; $i <= $numProd; $i++) {
            if ($cookies->has('idProduit_' . $i)) {
                $idProduit = $cookies->get('idProduit_' . $i);
                $myProd = $em->getRepository("CondorsTnMallBundle:Produit")->findOneByidProduit($idProduit);
                $prixAvecTva = (($myProd->getPrixProduit() * $myProd->getTvaProduit()) / 100) + $myProd->getPrixProduit();
                $myArray = array(

                    'Name' => $myProd->getLibelleProduit(),
                    'Price' => $prixAvecTva,


                );
                array_push($FullArray, $myArray);
                $amount += $prixAvecTva;
            }

        }

        // get an amount, e.g. from your cart*
        // $amount=110.0;
        $amount = $amount;
        $transaction = new Transaction($amount);
        $transaction->setMyArray($FullArray);
        //$transaction->getItems();
        try {
            $response = $this->get('beelab_paypal.service')->setTransaction($transaction)->start();
            $this->getDoctrine()->getManager()->persist($transaction);
            $this->getDoctrine()->getManager()->flush();

            return $this->redirect($response->getRedirectUrl());
        } catch (Exception $e) {
            throw new HttpException(503, 'Payment error', $e);
        }
    }

    /**
     * The route configured in "cancel_route" (see above) should point here
     */
    public function canceledPaymentAction(Request $request)
    {
        $token = $request->query->get('token');
        $transaction = $this->getDoctrine()->getRepository('CondorsTnMallBundle:Transaction')->findOneByToken($token);
        if (is_null($transaction)) {
            throw $this->createNotFoundException(sprintf('Transaction with token %s not found.', $token));
        }
        $transaction->cancel(null);
        $this->getDoctrine()->getManager()->flush();

        return array(); // or a Response...
    }

    /**
     * The route configured in "return_route" (see above) should point here
     */
    public function completedPaymentAction(Request $request)
    {
        $request = $this->get('request');
        $cookies = $request->cookies;
        $numProd = 0;
        $response = new Response();

        $FullArray = array();
        if ($cookies->has('numProd')) {
            $numProd = $cookies->get('numProd');
        }

        for ($i = 1; $i <= $numProd; $i++) {

            $response->headers->clearCookie('numProd');
            $response->headers->clearCookie('idProduit_' . $i);
            $response->headers->clearCookie('idCatalogue_' . $i);
            $response->headers->clearCookie('idPromotion_' . $i);
            $response->headers->clearCookie('libelleProduit_' . $i);
            $response->headers->clearCookie('CategorieProduit_' . $i);
            $response->headers->clearCookie('refProduit_' . $i);
            $response->headers->clearCookie('descriptionProduit_' . $i);
            $response->headers->clearCookie('tvaProduit_' . $i);
            $response->headers->clearCookie('prixProduit_' . $i);
            $response->headers->clearCookie('imageprodreel_' . $i);
            $response->headers->clearCookie('imageprodback_' . $i);


        }


        $response->send();


        $token = $request->query->get('token');
        $transaction = $this->getDoctrine()->getRepository('CondorsTnMallBundle:Transaction')->findOneByToken($token);
        if (is_null($transaction)) {
            throw $this->createNotFoundException(sprintf('Transaction with token %s not found.', $token));
        }
        $this->get('beelab_paypal.service')->setTransaction($transaction)->complete();
        $this->getDoctrine()->getManager()->flush();
        if (!$transaction->isOk()) {
            return array($transaction->getResponse()); // or a Response (in case of error)
        }

        return $this->render('CondorsTnMallBundle:SimpleVisitor:Panier.html.twig', array(
            'payed' => true,
            'totalPayment' =>$transaction->getAmount(),
        ));
    }


    public function UserConnectAction()
    {

    }


}
