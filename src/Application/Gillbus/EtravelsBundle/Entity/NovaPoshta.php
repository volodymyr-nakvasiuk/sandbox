<?php

namespace Application\Gillbus\EtravelsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NovaPoshta
 *
 * @ORM\Table(name="nova_poshta")
 * @ORM\Entity
 */
class NovaPoshta
{

    /**
     * @var string
     *
     * @ORM\Column(name="recipient", type="string", length=255, nullable=true)
     */
    private $recipient = '';

    /**
     * @var \Application\Gillbus\EtravelsBundle\Entity\Payments
     *
     * @ORM\ManyToOne(targetEntity="Application\Gillbus\EtravelsBundle\Entity\Payments")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="payment_id", referencedColumnName="id")
     * })
     */
    private $endReservation;

    /**
     * @var string
     *
     * @ORM\Column(name="recipient_address", type="string", length=255, nullable=true)
     */
    private $recipientAddress = '';

    /**
     * @var string
     *
     * @ORM\Column(name="document_ref", type="string", length=255, nullable=true)
     */
    private $documentRef = '';

    /**
     * @var string
     *
     * @ORM\Column(name="delivery_date", type="string", nullable=true)
     */
    private $deliveryDate;

    /**
     * @var string
     *
     * @ORM\Column(name="date_create", type="string", nullable=true)
     */
    private $dateCreate;

    /**
     * @var string
     *
     * @ORM\Column(name="date_pick_up", type="string", nullable=true)
     */
    private $datePickUp;

    /**
     * @var integer
     *
     * @ORM\Column(name="payment_id", type="integer")
     */
    private $paymentId;

    /**
     * @var string
     *
     * @ORM\Column(name="document_num", type="string")
     */
    private $documentNum;


    /**
     * @var \Application\Gillbus\EtravelsBundle\Entity\Status
     *
     * @ORM\ManyToOne(targetEntity="Application\Gillbus\EtravelsBundle\Entity\Status")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="status_id", referencedColumnName="id")
     * })
     */
    private $statusId;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


    /**
     * Get recipient
     *
     * @return string
     */
    public function getRecipient()
    {
        return $this->recipient;
    }


    /**
     * Get orderNumber
     *
     * @return string
     */
    public function getOrderNumber()
    {
        return $this->endReservation->endReservation->orderNumber;
    }

    /**
     * Get novaPoshtaTax
     *
     * @return string
     */
    public function getNovaPoshtaTax()
    {
        return $this->endReservation->endReservation->getNovaPoshtaTax();
    }

    /**
     * Get novaPoshtaAmount
     *
     * @return string
     */
    public function getNovaPoshtaAmount()
    {
        return $this->endReservation->endReservation->getNovaPoshtaAmount();
    }
    /**
     * Get novaPoshtaCheat
     *
     * @return string
     */
    public function getNovaPoshtaCheat()
    {
        return $this->endReservation->endReservation->getNovaPoshtaCheat();
    }

    /**
     * Get orderAmount
     *
     * @return string
     */
    public function getOrderAmount()
    {
        return 0+(float)$this->endReservation->endReservation->orderAmount;
    }

    /**
     * Get paymentAmount
     *
     * @return string
     */
    public function getPaymentAmount()
    {
        return 0+(float)$this->endReservation->paymentAmount;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->endReservation->endReservation->client->phone;
    }

    /**
     * Get recipientAddress
     *
     * @return string
     */
    public function getRecipientAddress()
    {
        return $this->recipientAddress;
    }

    /**
     * Get documentRef
     *
     * @return string
     */
    public function getDocumentRef()
    {
        return $this->documentRef;
    }

    /**
     * Get deliveryDate
     *
     * @return string
     */
    public function getDeliveryDate()
    {
        return date('d.m.Y H:i', strtotime($this->deliveryDate));
    }

    /**
     * Get dateCreate
     *
     * @return string
     */
    public function getDateCreate()
    {
        return date('d.m.Y H:i', strtotime($this->dateCreate));
    }

    /**
     * Get datePickUp
     *
     * @return string
     */
    public function getDatePickUp()
    {
        return date('d.m.Y H:i', strtotime($this->datePickUp));
    }

    /**
     * Get paymentId
     *
     * @return integer
     */
    public function getPaymentId()
    {
        return $this->paymentId;
    }

    /**
     * Get documentNum
     *
     * @return string
     */
    public function getDocumentNum()
    {
        return $this->documentNum;
    }


    /**
     * Get statusId
     *
     * @return \Application\Gillbus\EtravelsBundle\Entity\Status
     */
    public function getStatusId()
    {
        return $this->statusId;
    }

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
     * Get id
     *
     * @return string
     */
    public function getEndReservation()
    {
        return $this->endReservation;
    }

}
