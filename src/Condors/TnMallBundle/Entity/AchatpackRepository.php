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
class AchatpackRepository extends EntityRepository
{
    //put your code here
    public function findboughtPacks($idUser)
   
     {
        $query = $this->getEntityManager()
            ->createQuery("select pack from CondorsTnMallBundle:Achatpack achatpack, CondorsTnMallBundle:Pack pack where achatpack.idresponsable = :idUser and achatpack.idpack = pack.idPack");
         $query->setParameter("idUser", $idUser);
        return $query->getArrayResult();
    }
   
}