<?php

namespace Application\Gillbus\EtravelsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Payments
 *
 * @ORM\Table(name="payment")
 * @ORM\Entity
 */
class Payments
{
    /**
     * @var integer
     *
     * @ORM\Column(name="order_id", type="integer", nullable=false)
     */
    private $orderId;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=false)
     */
    private $type;


    /**
     * @var string
     *
     * @ORM\Column(name="currency", type="string", length=10, nullable=true)
     */
    private $currency;

    /**
     * @var \Application\Gillbus\EtravelsBundle\Entity\Status
     *
     * @ORM\ManyToOne(targetEntity="Application\Gillbus\EtravelsBundle\Entity\Status")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="status_id", referencedColumnName="id")
     * })
     */
    private $status;

    /**
     * @var \Application\Gillbus\EtravelsBundle\Entity\Order
     *
     * @ORM\OneToOne(targetEntity="Application\Gillbus\EtravelsBundle\Entity\Order")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="order_id", referencedColumnName="id")
     * })
     */
    private $endReservation;

    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="string")
     */
    private $paymentAmount;

    /**
     * @var \Application\Gillbus\EtravelsBundle\Entity\Order
     *
     * @ORM\ManyToOne(targetEntity="Application\Gillbus\EtravelsBundle\Entity\Order")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="order_id", referencedColumnName="id")
     * })
     */
    private $orderAmount;

    /**
     * @var \Application\Gillbus\EtravelsBundle\Entity\Order
     *
     * @ORM\ManyToOne(targetEntity="Application\Gillbus\EtravelsBundle\Entity\Order")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="order_id", referencedColumnName="id")
     * })
     */
    private $orderNumber;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_create", type="datetime", nullable=true)
     */
    private $dateCreate;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

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
     * Get orderId
     *
     * @return integer
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }


    /**
     * Get currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Get status
     *
     * @return \Application\Gillbus\EtravelsBundle\Entity\Status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Get dateEndReservation
     *
     * @return string
     */
    public function getEndReservation()
    {
        return $this->endReservation;
    }

    /**
     * Get orderAmount
     *
     * @return \Application\Gillbus\EtravelsBundle\Entity\Order
     */
    public function getOrderAmount()
    {
        return $this->orderAmount;
    }

    /**
     * Get orderNumber
     *
     * @return \Application\Gillbus\EtravelsBundle\Entity\Order
     */
    public function getOrderNumber()
    {
        return $this->orderNumber;
    }

    /**
     * Get dateCreate
     *
     * @return \DateTime
     */
    public function getDateCreate()
    {
        return $this->dateCreate;
    }
    /**
     * Get paymentAmount
     *
     * @return string
     */
    public function getPaymentAmount()
    {
        return 0+(float)$this->paymentAmount;
    }

    public function __toString()
    {
        return (string)$this->getEndReservation();
    }

    public function getPhone()
    {
        return $this->orderNumber->getClient()->getPhone();
    }
}
