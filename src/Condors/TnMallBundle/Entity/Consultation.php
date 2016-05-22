<?php

namespace Condors\TnMallBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Consultation
 *
 * @ORM\Table(name="consultation", indexes={@ORM\Index(name="id_consultation", columns={"id_consultation"}), @ORM\Index(name="id_client", columns={"id_client"}), @ORM\Index(name="id_enseigne", columns={"id_enseigne"})})
 * @ORM\Entity
 */
class Consultation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_consultation", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idConsultation;

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
