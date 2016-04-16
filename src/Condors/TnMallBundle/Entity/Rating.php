<?php
/**
 * Created by PhpStorm.
 * User: kimkim
 * Date: 11/04/16
 * Time: 21:15
 */

namespace Condors\TnMallBundle\Entity;

use DCS\RatingBundle\Entity\Rating as BaseRating;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\ChangeTrackingPolicy("DEFERRED_EXPLICIT")
 */
class Rating extends BaseRating
{
    /**
     * @ORM\Id
     * @ORM\Column(type="string")
     */
    protected $id;

    /**
     * @ORM\OneToMany(targetEntity="Condors\TnMallBundle\Entity\Voter", mappedBy="rating")
     */
    protected $votes;
}
