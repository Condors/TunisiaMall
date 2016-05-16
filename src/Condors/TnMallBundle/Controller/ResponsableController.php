<?php

namespace Condors\TnMallBundle\Controller;

use Condors\TnMallBundle\Entity\Boutique;
use Condors\TnMallBundle\Entity\BoutiqueRepository;
use Condors\TnMallBundle\Entity\Categories;
use Condors\TnMallBundle\Entity\Achatpack;
use Condors\TnMallBundle\Form\BoutiqueType;
use Condors\TnMallBundle\Form\CategoriesType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Condors\TnMallBundle\Entity\Produit;
use Condors\TnMallBundle\Entity\Enseigne;
use Condors\TnMallBundle\Form\ProduitType;
use Condors\TnMallBundle\Form\EnseigneType;
use Symfony\Component\DependencyInjection\Tests\B;
use Symfony\Component\HttpFoundation\JsonResponse;
use Condors\TnMallBundle\Entity\Pack ;
use Symfony\Component\HttpKernel\HttpCache\Store;

/**
 * Description of ResponsableController
 *
 * @author HP
 */
class ResponsableController extends Controller
{

    public function indexAction()
    {


        $user = $this->getUser();
        return $this->render('CondorsTnMallBundle:Responsable:index.html.twig', array(
            'user' => $user,
        ));
    }

    public function productsAction()
    {

        $em = $this->getDoctrine()->getManager();

        $user = $this->getUser();
        $form = $this->createForm(new ProduitType($user->getId()));


        $allProds = $em->getRepository("CondorsTnMallBundle:Produit")->findProdRespoCatalog($user->getId());

        $prod = new Produit();
        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
            //Note: bindRequest is now deprecated
            $form->bind($request);
            if ($form->isValid()) {
                //retrieve your model hydrated with your form values
                //has upload file ?
                $prod = $form->getData();

                $prod->uploadProfilePicture();

                $prodEnseigne = $prod->getIdCatalogue()->getIdEnseigne();


                $prod_cat = $em->getRepository("CondorsTnMallBundle:Enseigne")->findBrandbyRespoId($prod->getIdCatalogue($prodEnseigne));
                foreach ($prod_cat as $value) {
                    $catalogValue = $em->getRepository("CondorsTnMallBundle:Catalogue")->findOneByidCatalogue($value);
                    $prod->setIdCatalogue($catalogValue);
                }

                $em->persist($prod);
                $em->flush();
                return $this->redirect($this->generateUrl("condors_tn_mall_responsable_produit"));
            }
        }


        return $this->render('CondorsTnMallBundle:Responsable:GestionProduit.html.twig', array(
            'user' => $user,
            'form' => $form->createView(),
            'allprods' => $allProds,
        ));
    }

    public function modifyAction(Produit $prods)
    {

        if ($this->container->has('profiler')) {
            $this->container->get('profiler')->disable();
        }

        $em = $this->getDoctrine()->getManager();
        
        $user = $this->getUser();

        $form = $this->createForm(new ProduitType($user->getId()), $prods);




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

                $prodEnseigne = $prod->getIdCatalogue()->getIdEnseigne();
               /* print_r($prodEnseigne );
                die();*/


                $prod_cat = $em->getRepository("CondorsTnMallBundle:Enseigne")->findBrandbyRespoId($prodEnseigne);
                foreach ($prod_cat as $value) {
                    $catalogValue = $em->getRepository("CondorsTnMallBundle:Catalogue")->findOneByidCatalogue($value);
                    $prod->setIdCatalogue($catalogValue);
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

    public function deleteAction(Produit $prods)
    {


        $em = $this->getDoctrine()->getManager();
        $em->remove($prods);
        $em->flush();


        return $this->redirect($this->generateUrl("condors_tn_mall_responsable_produit"));
    }

    public function searchProdAction($txtSearch)
    {
        $em = $this->getDoctrine()->getManager();

        $prods = $em->getRepository("CondorsTnMallBundle:Produit")->findProdSearch($txtSearch);
        $rep = new JsonResponse(($prods));

        return $rep;
    }

    /* Stores */

    public function storesAction()
    {
        $em = $this->getDoctrine()->getManager();

        $stores = $em->getRepository("CondorsTnMallBundle:Produit")->findAll();

        $user = $this->getUser();
        $form = $this->createForm(new BoutiqueType($user->getId()));
       //$allStores = $em->getRepository("CondorsTnMallBundle:Boutique")->findStorebyId($user->getId());
      $allStores = $em->getRepository("CondorsTnMallBundle:Boutique")->findStoreByBrandRespo($user->getId());


        $store = new Boutique();
        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
            //Note: bindRequest is now deprecated
            $form->bind($request);
            if ($form->isValid()) {
                //retrieve your model hydrated with your form values
                //has upload file ?

                $store = $form->getData();

                $store->uploadProfilePicture();
                
                $em->persist($store);
                $em->flush();

                return $this->redirect($this->generateUrl("condors_tn_mall_responsable_store"));
            }
        }

        return $this->render('CondorsTnMallBundle:Responsable:GestionStores.html.twig', array(
            'user' => $user,
            'form' => $form->createView(),
            'allstores' => $allStores,
        ));
    }
    

    public function modifystoreAction(Boutique $stores)
    {
        if ($this->container->has('profiler')) {
            $this->container->get('profiler')->disable();
        }

        $em = $this->getDoctrine()->getManager();

        $user = $this->getUser();

        $form = $this->createForm(new BoutiqueType($user->getId()), $stores);

        $request = $this->getRequest();

        if ($request->getMethod() == 'POST') {
            //Note: bindRequest is now deprecated
            $form->bind($request);
            if ($form->isValid()) {
                //retrieve your model hydrated with your form values
                //has upload file ?
                $store = $form->getData();
                if (($store instanceof UploadedFile) && ($store > getError() == '0')) {
                    $store->uploadProfilePicture();
                }
                $em->persist($store);
                $em->flush();
                }
            }

        return $this->render('CondorsTnMallBundle:Responsable:GestionStoresModifer.html.twig', array(
            'user' => $user,
            'form' => $form->createView(),
            'stores' => $stores,
        ));


    }

    public function deletestoreAction(Boutique $stores)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($stores);
        $em->flush();

        return $this->redirect($this->generateUrl("condors_tn_mall_responsable_store"));
    }

    /* Brands */

    public function brandsAction()
    {

        $em = $this->getDoctrine()->getManager();

        $brands = $em->getRepository("CondorsTnMallBundle:Produit")->findAll();

        $form = $this->createForm(new EnseigneType());
        $user = $this->getUser();
        $allbrands = $em->getRepository("CondorsTnMallBundle:Enseigne")->findBrandbyId($user->getId());


        $brand = new Enseigne();
        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
            //Note: bindRequest is now deprecated
            $form->bind($request);
            if ($form->isValid()) {
                //retrieve your model hydrated with your form values
                //has upload file ?
                $brand = $form->getData();
                $brand->setIdresponsableenseigne($user);

                $brand->uploadProfilePicture();


                $em->persist($brand);
                $em->flush();
                return $this->redirect($this->generateUrl("condors_tn_mall_responsable_brands"));
            }
        }

        return $this->render('CondorsTnMallBundle:Responsable:GestionBrands.html.twig', array(
            'user' => $user,
            'form' => $form->createView(),
            'allbrands' => $allbrands,
        ));
    }

    public function modifyBrandsAction(Enseigne $brands)
    {
        if ($this->container->has('profiler')) {
            $this->container->get('profiler')->disable();
        }
        $em = $this->getDoctrine()->getManager();

        $form = $this->createForm(new EnseigneType(), $brands);

        $user = $this->getUser();

        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
            //Note: bindRequest is now deprecated
            $form->bind($request);
            if ($form->isValid()) {
                //retrieve your model hydrated with your form values
                //has upload file ?
                $brand = $form->getData();
                $brand->setIdresponsableenseigne($user);

                if (($brands instanceof UploadedFile) && ($brand > getError() == '0')) {
                    $brands->uploadProfilePicture();
                }

                $em->persist($brand);
                $em->flush();
                //return $this->redirect($this->generateUrl("condors_tn_mall_responsable_brands"));
            }
        }
        return $this->render('CondorsTnMallBundle:Responsable:GestionBrandsModifier.html.twig', array(
            'user' => $user,
            'form' => $form->createView(),
            'brands' => $brands,
        ));

    }
    
    public function deleteBrandsAction(Enseigne $brands)
    {

        $em = $this->getDoctrine()->getManager();
        $em->remove($brands);
        $em->flush();

        return $this->redirect($this->generateUrl("condors_tn_mall_responsable_brands"));
    }
    
    public function categoriesAction()
    {

        $em = $this->getDoctrine()->getManager();

        $user = $this->getUser();
        $form = $this->createForm(new CategoriesType($user->getId()));
        $Categories = $em->getRepository("CondorsTnMallBundle:Categories")->findCategoriesByBrandRespo($user->getId());


        $cat = new Categories();
        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
            //Note: bindRequest is now deprecated
            $form->bind($request);
            if ($form->isValid()) {

                $cat = $form->getData();
                $em->persist($cat);
                $em->flush();

                return $this->redirect($this->generateUrl("condors_tn_mall_responsable_categories"));

            }
        }

        return $this->render('CondorsTnMallBundle:Responsable:GestionCategories.html.twig', array(
            'user' => $user,
            'form' => $form->createView(),
            'categories' => $Categories,

        ));

    }
    
    public function updateCatPositionAction($id, $pos)
    {


        $em = $this->getDoctrine()->getManager();


        $user = $this->getUser();
        $request = $this->getRequest();


        $categorie = $em->getRepository("CondorsTnMallBundle:Categories")->findOneById($id);
        $categorie->setPosition($pos);

        $em->persist($categorie);
        $em->flush();


        return $this->redirect($this->generateUrl("condors_tn_mall_responsable_categories"));
    }

    public function searchCategorieAction($txtSearch)
    {
        $em = $this->getDoctrine()->getManager();

        $categories = $em->getRepository("CondorsTnMallBundle:Categories")->findCategoriesByIdEns($txtSearch);
        $rep = new JsonResponse(($categories));

        return $rep;
    }
    
    public function checkGoogleAction()
    {


        $user = $this->getUser();
        return $this->render('CondorsTnMallBundle:Responsable:index.html.twig', array(
            'user' => $user,
        ));
    }
    
    public function checkFacebookAction()
    {


        $user = $this->getUser();
        return $this->render('CondorsTnMallBundle:Responsable:index.html.twig', array(
            'user' => $user,
        ));
    }
  
    public function displayBouthPacksAction()
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser()->getId() ;
                
        $packs = $em->getRepository("CondorsTnMallBundle:Achatpack")->findboughtPacks($user);

      
        $rep = new JsonResponse(($packs));

        return $rep;
    }
    
    public function buyPacksAction(Pack $pack){
      
         $em = $this->getDoctrine()->getManager();
         $achatpack = new Achatpack();
         $achatpack->setIdresponsable($this->getUser());
         $achatpack->setIdpack($pack);
         $em->persist($achatpack);
         $em->flush();
         

       
     
        
         
                      
        $rep = new JsonResponse("ok");

        return $rep;
    }

        public function gestionPackAction()
    {   $em = $this->getDoctrine()->getManager();
        $packs = $em->getRepository("CondorsTnMallBundle:Pack")->findallPacks();
        $user = $this->getUser(); 
        return $this->render("CondorsTnMallBundle:Responsable:GestionPacks.html.twig",array(
            'user'=>$user , 'packs'=>$packs
        )); 
    }
    
    
  

}
