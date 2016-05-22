<?php
/**
 * Created by PhpStorm.
 * User: kimkim
 * Date: 02/04/16
 * Time: 11:10
 */

namespace Condors\TnMallBundle\Entity;
use Doctrine\ORM\EntityRepository;


class CategoriesRepository extends EntityRepository
{

    public function findCategoriesByBrandRespo($id)
    {
        $query = $this->getEntityManager()
            ->createQuery("select m from CondorsTnMallBundle:Categories 
            m JOIN m.idEnseigne
            p  where p.idresponsableenseigne=:EnsRespoid ORDER BY m.position ASC")
            ->setParameter('EnsRespoid', $id);




        return $query->getResult();
    }

    public function findCategoriesByIdEns($id)
    {
        $query = $this->getEntityManager()
            ->createQuery("select m from CondorsTnMallBundle:Categories 
            m  where m.idEnseigne=:ens ORDER BY m.position ASC")
            ->setParameter('ens', $id);




        return $query->getArrayResult();
    }


}