<?php

namespace Application\Gillbus\EtravelsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sduser
 *
 * @ORM\Table(name="sduser_test")
 * @ORM\Entity
 */
class Sduser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="order_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $order_id;

    /**
     * @var string
     *
     * @ORM\Column(name="sd_user", type="string")
     */
    private $user;


    /**
     * Get order_id
     *
     * @return integer
     */
    public function getOrder_Id()
    {
        return $this->order_id;
    }

    /**
     * Get user
     *
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     *
     * @return string
     */
    public function __toString()
    {
        return $this->user;
    }


    /**
     * @ORM\ManyToOne(targetEntity="Order", inversedBy="sdusers")
     */
    private $order;

    /**
     * Get order
     *
     * @return \Application\Gillbus\EtravelsBundle\Entity\Order
     */
    public function getOrder()
    {
        return $this->order;
    }


}
