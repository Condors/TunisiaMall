<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EventRespository
 *
 * @author Amine
 */

namespace Condors\TnMallBundle\Entity;

use Doctrine\ORM\EntityRepository;


class EventRepository extends EntityRepository
{
    //put your code here

    public function findNewEvents()
    {
        $query = $this->getEntityManager()
            ->createQuery("select e from CondorsTnMallBundle:Event e ORDER BY e.dateDebut_Event DESC ")
            ->setMaxResults(5);
        return $query->getResult();
    }

        public function findEventbyIdAdmin($id)
    {
        $query = $this->getEntityManager()
            ->createQuery("select e from CondorsTnMallBundle:Event e where e.idAdmin=:EventAid ")
            ->setParameter('EventAid', $id);

        return $query->getResult();
    }
    
    public function findEventbyIdEvent($id)
    {
        $query = $this->getEntityManager()
            ->createQuery("select e from CondorsTnMallBundle:Event e where e.id_Event=:eventId ")
            ->setParameter('eventId', $id)
            ->setMaxResults(1)
            ->getResult();
        return $query[0];
    }   
    
    public function findEventSearch($txtSearch)
    {
        $query = $this->getEntityManager()
            ->createQuery("select e from CondorsTnMallBundle:Event e where e.libelle_Event LIKE :txtSearched ")
            ->setParameter('txtSearched', '%' . $txtSearch . '%');
        return $query->getArrayResult();
    }
    
}
