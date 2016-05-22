<?php
/**
 * Created by PhpStorm.
 * User: sooheib
 * Date: 5/3/16
 * Time: 12:52 PM
 */

namespace Condors\TnMallBundle\Entity;
use Doctrine\ORM\EntityRepository;

class BoutiqueRepository extends EntityRepository
{

    public function findStoreByBrandRespo($id)
    {
        $query = $this->getEntityManager()
            ->createQuery("select m from CondorsTnMallBundle:Boutique
            m JOIN m.idEnseigne
            p  where p.idresponsableenseigne=:EnsRespoid")
            ->setParameter('EnsRespoid', $id);
        return $query->getResult();
    }
    
    

    public function findStorebyId($id)
    {
        $query = $this->getEntityManager()
            ->createQuery("select m from CondorsTnMallBundle:Boutique m where m.idBoutique=:boutiqueid")
            ->setParameter('boutiqueid', $id)
            ->setMaxResults(1)
            ->getResult();

        return $query[0];
    }


    public function findStorebyName($id)
    {
        $query = $this->getEntityManager()
            ->createQuery("select m from CondorsTnMallBundle:Boutique m where m.libelleBoutique=:boutiqueid")
            ->setParameter('boutiqueid', $id)
            ->setMaxResults(1)
            ->getResult();

        return $query[0];
    }
    
    public function findStoreRelated($categorieBoutique)
    {
        $query = $this->getEntityManager()
            ->createQuery("select m from CondorsTnMallBundle:Boutique m where m.categorieBoutique=:cateBoutique ")
            ->setParameter('cateBoutique', $categorieBoutique)
            ->setMaxResults(5);


        return $query->getResult();

    }

    public function findNewStore()
    {
        $query = $this->getEntityManager()
            ->createQuery("select m from CondorsTnMallBundle:Boutique m ORDER BY m.datecreation DESC ")
            ->setMaxResults(5);

        return $query->getResult();

    }

    public function findStoreByIdEns($id)
    {
        $query = $this->getEntityManager()
            ->createQuery("select m from CondorsTnMallBundle:Boutique 
            m  where m.idEnseigne=:ens")
            ->setParameter('ens', $id);




        return $query->getArrayResult();
    }
    
    public function findStoreSearch($txtSearch)
    {
        $query = $this->getEntityManager()
            ->createQuery("select m from CondorsTnMallBundle:Boutique m where m.libelleBoutique LIKE :txtSearched ")
            ->setParameter('txtSearched', '%' . $txtSearch . '%');


        return $query->getArrayResult();

    }
    
    public function findStoreOrder($id, $txtSreach)
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
                ->createQuery("Select e from CondorsTnMallBundle:Produit "
                    . "e join e.idCatalogue "
                    . "c join c.idEnseigne v "
                    . "WHERE
                    v.idEnseigne=:EnsRespoid AND e.prixProduit >:minPrice AND e.prixProduit<:maxPrice   ORDER By e.prixProduit DESC  ")
                ->setParameter('EnsRespoid', $id)
                ->setParameter('minPrice', $minPrice)
                ->setParameter('maxPrice', $maxPrice);

            return $query->getArrayResult();


        }
    }

}