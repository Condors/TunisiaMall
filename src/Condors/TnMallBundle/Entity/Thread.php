<?php
/**
 * Created by PhpStorm.
 * User: kimkim
 * Date: 10/04/16
 * Time: 19:43
 */

namespace Condors\TnMallBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

use FOS\CommentBundle\Entity\Thread as BaseThread;

/**

 * @ORM\Entity

 * @ORM\ChangeTrackingPolicy("DEFERRED_EXPLICIT")

 */

class Thread extends BaseThread

{

    /**

     * @var string $id

     *

     * @ORM\Id

     * @ORM\Column(type="string")

     */

    protected $id;

}