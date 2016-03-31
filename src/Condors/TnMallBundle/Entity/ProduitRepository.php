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


class ProduitRepository extends EntityRepository {
    //put your code here
    
    public function findNewProd()
    {
        $query=$this->getEntityManager()
                    ->createQuery("select m from CondorsTnMallBundle:Produit m ORDER BY m.datecreation DESC ")
                    ->setMaxResults(5);
        
            return $query->getResult();
        
    }
    
    public function findProdbyId($id)
    {
        $query=$this->getEntityManager()
                    ->createQuery("select m from CondorsTnMallBundle:Produit m where m.idProduit=:prodid ")
                    ->setParameter('prodid', $id)
                     ->setMaxResults(1)
                     ->getResult();
                   
        
            return $query[0];
        
    }
    
    public function findProdRelated($categorieProduit)
    {
        $query=$this->getEntityManager()
                    ->createQuery("select m from CondorsTnMallBundle:Produit m where m.categorieProduit=:cateProduit ")
                    ->setParameter('cateProduit', $categorieProduit)
                    ->setMaxResults(5);
                     
                   
        
            return $query->getResult();
        
    }
    
     public function findProdSearch($txtSearch)
    {
        $query=$this->getEntityManager()
                    ->createQuery("select m from CondorsTnMallBundle:Produit m where m.libelleProduit LIKE :txtSearched ")
                    ->setParameter('txtSearched', '%'.$txtSearch.'%');
                   
                     
                   
        
            return $query->getArrayResult();
        
    }
    
}
