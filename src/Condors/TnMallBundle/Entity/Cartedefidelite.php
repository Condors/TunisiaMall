<?php

namespace Condors\TnMallBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cartedefidelite
 *
 * @ORM\Table(name="cartedefidelite", indexes={@ORM\Index(name="id_carte", columns={"idCarte"}), @ORM\Index(name="id_client", columns={"id"}), @ORM\Index(name="id_enseigne", columns={"idEnseigne"})})
 * @ORM\Entity
 */
class Cartedefidelite
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idCarte", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcarte;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="idEnseigne", type="integer", nullable=false)
     */
    private $idenseigne;

    /**
     * @var string
     *
     * @ORM\Column(name="nbrePoints", type="string", length=20, nullable=false)
     */
    private $nbrepoints;

    /**
     * @var string
     *
     * @ORM\Column(name="dateCreation", type="string", length=20, nullable=false)
     */
    private $datecreation;

    /**
     * @var string
     *
     * @ORM\Column(name="dateExpiration", type="string", length=20, nullable=false)
     */
    private $dateexpiration;

    /**
     * @var integer
     *
     * @ORM\Column(name="activity", type="integer", nullable=false)
     */
    private $activity;

    /**
     * @var string
     *
     * @ORM\Column(name="design", type="string", length=20, nullable=false)
     */
    private $design;

    /**
     * @var string
     *
     * @ORM\Column(name="codeQR", type="string", length=20, nullable=false)
     */
    private $codeqr;


}
