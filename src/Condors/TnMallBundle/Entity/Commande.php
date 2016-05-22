<?php

namespace Condors\TnMallBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 *
 * @ORM\Table(name="commande", indexes={@ORM\Index(name="id_commande", columns={"id_commande"}), @ORM\Index(name="id_client", columns={"id_client"}), @ORM\Index(name="id_livraison", columns={"id_livraison"}), @ORM\Index(name="id_livraison_2", columns={"id_livraison"})})
 * @ORM\Entity
 */
class Commande
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_commande", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCommande;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_client", type="integer", nullable=false)
     */
    private $idClient;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_livraison", type="integer", nullable=true)
     */
    private $idLivraison;


}
