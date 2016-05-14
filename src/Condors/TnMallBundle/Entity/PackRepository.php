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
class PackRepository extends EntityRepository
{
    //put your code here
    public function findallPacks()
    {
        $query = $this->getEntityManager()
            ->createQuery("select pack from CondorsTnMallBundle:Pack pack");
        return $query->getArrayResult();
    }
   
}