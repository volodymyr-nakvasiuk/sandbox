<?php

namespace Application\Gillbus\EtravelsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Posting
 *
 * @ORM\Table(name="posting")
 * @ORM\Entity
 */
class Posting
{

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


    /**
     * @ORM\ManyToOne(targetEntity="Order", inversedBy="postings")
     */
    private $order;

    /**
     * @var string
     *
     * @ORM\Column(name="posting_type", type="string")
     */
    private $postingType;

    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="string")
     */
    private $amount;


    /**
     * @var \DateTime
     *
     * @ORM\Column(name="create_date", type="string", nullable=false)
     */
    private $dateCreate;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * Get order
     *
     * @return \Application\Gillbus\EtravelsBundle\Entity\Order
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Get postingType
     *
     * @return string
     */
    public function getPostingType()
    {
        return $this->postingType;
    }
    /**
     * Get amount
     *
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }
    /**
     * Get dateCreate
     *
     * @return string
     */
    public function getDateCreate()
    {
        return $this->dateCreate;
    }

    /**
     *
     * @return string
     */
    public function __toString()
    {
        return $this->dateCreate;
    }
}
