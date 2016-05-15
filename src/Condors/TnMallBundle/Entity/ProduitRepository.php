<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProduitRespository
 *
 * @author HP
 */

namespace Condors\TnMallBundle\Entity;

use Doctrine\ORM\EntityRepository;


class ProduitRepository extends EntityRepository
{
    //put your code here

    public function findNewProd()
    {
        $query = $this->getEntityManager()
            ->createQuery("select m from CondorsTnMallBundle:Produit m ORDER BY m.datecreation DESC ")
            ->setMaxResults(5);

        return $query->getResult();

    }

    public function findProdbyId($id)
    {
        $query = $this->getEntityManager()
            ->createQuery("select m from CondorsTnMallBundle:Produit m where m.idProduit=:prodid ")
            ->setParameter('prodid', $id)
            ->setMaxResults(1)
            ->getResult();


        return $query[0];

    }

    public function findProdRelated($categorieProduit)
    {
        $query = $this->getEntityManager()
            ->createQuery("select m from CondorsTnMallBundle:Produit m where m.categorieProduit=:cateProduit ")
            ->setParameter('cateProduit', $categorieProduit)
            ->setMaxResults(5);


        return $query->getResult();

    }

    public function findProdSearch($txtSearch)
    {
        $query = $this->getEntityManager()
            ->createQuery("select m from CondorsTnMallBundle:Produit m where m.libelleProduit LIKE :txtSearched ")
            ->setParameter('txtSearched', '%' . $txtSearch . '%');


        return $query->getArrayResult();

    }

    public function findProdRespoCatalog($id)
    {
        $query = $this->getEntityManager()
            ->createQuery("Select e from CondorsTnMallBundle:Produit "
                . "e join e.idCatalogue "
                . "c join c.idEnseigne v "
                . "WHERE
                    v.idresponsableenseigne=:EnsRespoid  ")
            ->setParameter('EnsRespoid', $id);

        return $query->getResult();
    }

    public function findProdOrder($id, $txtSreach)
    {
        if ($txtSreach == 1) {
            $query = $this->getEntityManager()
                ->createQuery("Select e from CondorsTnMallBundle:Produit "
                    . "e join e.idCatalogue "
                    . "c join c.idEnseigne v "
                    . "WHERE
                    v.idEnseigne=:EnsRespoid ORDER By e.prixProduit ASC  ")
                ->setParameter('EnsRespoid', $id);

            return $query->getArrayResult();
        } elseif ($txtSreach == 2) {
            $query = $this->getEntityManager()
                ->createQuery("Select e from CondorsTnMallBundle:Produit "
                    . "e join e.idCatalogue "
                    . "c join c.idEnseigne v "
                    . "WHERE
                    v.idEnseigne=:EnsRespoid ORDER By e.prixProduit DESC  ")
                ->setParameter('EnsRespoid', $id);

            return $query->getArrayResult();
        } else {

            $marqueurDebutMin = "[Dmin]";
            $debutMin = strpos($txtSreach, $marqueurDebutMin) + strlen($marqueurDebutMin);
            $marqueurFinMin = "[Fmin]";
            $finMin = strpos($txtSreach, $marqueurFinMin);
            $minPrice = substr($txtSreach, $debutMin, $finMin - $debutMin);


            $marqueurDebutMax = "[Dmax]";
            $debutMax = strpos($txtSreach, $marqueurDebutMax) + strlen($marqueurDebutMax);
            $marqueurFinMax = "[Fmax]";
            $finMax = strpos($txtSreach, $marqueurFinMax);
            $maxPrice = substr($txtSreach, $debutMax, $finMax - $debutMax);



            $query = $this->getEntityManager()
                ->createQuery("Select e from CondorsTnMallBundle:Produit e join e.idCatalogue c join c.idEnseigne v "
                    . "WHERE
                    v.idEnseigne=:EnsRespoid AND e.prixProduit >:minPrice AND e.prixProduit<:maxPrice   ORDER By e.prixProduit DESC  ")
                ->setParameter('EnsRespoid', $id)
                ->setParameter('minPrice', $minPrice)
                ->setParameter('maxPrice', $maxPrice);

            return $query->getArrayResult();


        }
    }
    
    
    public function findProduitZoneA() {
        $query = $this->getEntityManager()
                ->createQuery("Select produits from CondorsTnMallBundle:Produit"
                        . "prduits join prduits.idStock stock join sotck.id_boutique boutique"
                        . " join boutique.id_enseigne enseigne join"
                        . " enseigne.id_user  user join user.idachat"
                        . " achatpack join achatpack.idpack pack where"
                        . "pack.ZoneA = true ");
        
        return $query->getArrayResult() ; 
    }
     public function findProduitZoneB() {
         
                $query = $this->getEntityManager()
                ->createQuery("Select produits from CondorsTnMallBundle:Produit"
                        . "prduits join prduits.idStock stock join sotck.id_boutique boutique"
                        . " join boutique.id_enseigne enseigne join"
                        . " enseigne.id_user  user join user.idachat"
                        . " achatpack join achatpack.idpack pack where"
                        . "pack.ZoneB = true ");
        
        return $query->getArrayResult() ; 
        
    }
    
     public function findProduitZoneC() {
              
         $query = $this->getEntityManager()
                ->createQuery("Select pts from CondorsTnMallBundle:Produit"
                        . " pts join pts.idCatalogue catalogue"
                        . " join catalogue.idResponsableEnseigne user "
                        . "join CondorsTnMallBundle:Achatpack achatpack with achatpack.idresponsable =  user.id"
                        . " join CondorsTnMallBundle:Pack pack with pack.idPack = achatpack.idpack"
                        . " where pack.zoneA = true ");
        
        return $query->getArrayResult(); 
    }

}
