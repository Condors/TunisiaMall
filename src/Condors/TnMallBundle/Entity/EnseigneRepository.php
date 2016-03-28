<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EnseigneRepository
 *
 * @author HP
 */

namespace Condors\TnMallBundle\Entity;

use Doctrine\ORM\EntityRepository;

class EnseigneRepository extends EntityRepository {

    public function findBrandbyId($id) {
        $query = $this->getEntityManager()
                ->createQuery("select m from CondorsTnMallBundle:Enseigne m where m.idresponsableenseigne=:Ensid ")
                ->setParameter('Ensid', $id)
        ;

        return $query->getResult();
    }

    public function findBrandbyIdBrand($id) {
        $query = $this->getEntityManager()
                ->createQuery("select m from CondorsTnMallBundle:Enseigne m where m.idEnseigne=:Ensid ")
                ->setParameter('Ensid', $id)
                ->setMaxResults(1)
                ->getResult()
        ;


        return $query[0];
    }
    
    
    public function findBrandCatalog($id) {
        $query = $this->getEntityManager()
                ->createQuery("select ee from CondorsTnMallBundle:Enseigne m "
                        . "join CondorsTnMallBundle:Catalogue n "
                        . "join CondorsTnMallBundle:Produit ee "
                        . "where m.idEnseigne=:Ensid")
                ->setParameter('Ensid', $id)
        ;

        return $query->getResult();
    }

}
