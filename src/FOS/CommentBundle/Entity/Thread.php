<?php

namespace FOS\CommentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Thread
 *
 * @ORM\Table(name="thread")
 * @ORM\MappedSuperClass
 */
class Thread
{
    /**
     * @var string
     *
     * @ORM\Column(name="permalink", type="string")
     */
    private $permalink;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_commentable", type="boolean")
     */
    private $isCommentable;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_comments", type="integer")
     */
    private $numComments;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_comment_at", type="datetime", nullable=true)
     */
    private $lastCommentAt;


}
