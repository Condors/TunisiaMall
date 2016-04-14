<?php

namespace Condors\TnMallBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Suivre
 *
 * @ORM\Table(name="suivre", indexes={@ORM\Index(name="id_suivre", columns={"id_suivre", "id_client", "id_enseigne"}), @ORM\Index(name="id_client", columns={"id_client"}), @ORM\Index(name="id_enseigne", columns={"id_enseigne"})})
 * @ORM\Entity
 */
class Suivre
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_suivre", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSuivre;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_client", type="integer", nullable=false)
     */
    private $idClient;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_enseigne", type="integer", nullable=false)
     */
    private $idEnseigne;


}
