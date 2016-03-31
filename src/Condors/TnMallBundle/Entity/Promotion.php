<?php

namespace Condors\TnMallBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Promotion
 *
 * @ORM\Table(name="promotion", indexes={@ORM\Index(name="id_promotion", columns={"id_promotion"})})
 * @ORM\Entity
 */
class Promotion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_promotion", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPromotion;

    /**
     * @var string
     *
     * @ORM\Column(name="labelle", type="string", length=255, nullable=false)
     */
    private $labelle;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDebut", type="date", nullable=false)
     */
    private $datedebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateFin", type="date", nullable=false)
     */
    private $datefin;

    /**
     * @var integer
     *
     * @ORM\Column(name="tauxReduction", type="integer", nullable=false)
     */
    private $tauxreduction;

    /**
     * @var string
     *
     * @ORM\Column(name="imagePromo", type="string", length=255, nullable=true)
     */
    private $imagepromo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateOfCreation", type="datetime", nullable=true)
     */
    private $dateofcreation;


}
