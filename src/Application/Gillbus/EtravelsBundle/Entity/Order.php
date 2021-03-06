<?php

namespace Application\Gillbus\EtravelsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Order
 *
 * @ORM\Table(name="`order`", uniqueConstraints={@ORM\UniqueConstraint(name="oid", columns={"oid"})}, indexes={@ORM\Index(name="client_id", columns={"client_id"}), @ORM\Index(name="status_id", columns={"status_id"})})
 * @ORM\Entity
 */
class Order
{
    /**
     * @var string
     *
     * @ORM\Column(name="oid", type="string", length=50, nullable=false)
     */
    private $oid;

    /**
     * @var string
     *
     * @ORM\Column(name="order_number", type="string", length=20, nullable=false)
     */
    private $orderNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="system_number", type="string", length=20, nullable=false)
     */
    private $systemNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="string")
     */
    private $orderAmount;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_booking", type="boolean", nullable=false)
     */
    private $isBooking;

    /**
     * @var string
     *
     * @ORM\Column(name="referer_uri", type="string", length=255, nullable=false)
     */
    private $refererUri;

    /**
     * @var string
     *
     * @ORM\Column(name="resource", type="string", length=255, nullable=false)
     */
    private $resource;

    /**
     * @var boolean
     *
     * @ORM\Column(name="join_book_buy", type="boolean", nullable=false)
     */
    private $joinBookBuy = false;

    /**
     * @var string
     *
     * @ORM\Column(name="passangers", type="text", length=65535, nullable=false)
     */
    private $passangers;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_create", type="string", nullable=false)
     */
    private $dateCreate;

    /**
     * @var string
     *
     * @ORM\Column(name="date_end_reservation", type="string", nullable=false)
     */
    private $dateEndReservation;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

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
     * @var \Application\Gillbus\EtravelsBundle\Entity\Sduser
     *
     * @ORM\ManyToOne(targetEntity="Application\Gillbus\EtravelsBundle\Entity\Sduser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id", referencedColumnName="order_id")
     * })
     */
    private $sduser;
    /**
     * @ORM\OneToMany(targetEntity="Sduser", mappedBy="order")
     */
    private $sdusers;

    /**
     * Get sdusers
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSdUsers()
    {
        return $this->sdusers;
    }
    /**
     * Get sdUser
     *
     * @return string
     */
    public function getSdUser()
    {
        $sd_users = $this->sdusers->toArray();
        if(!empty($sd_users)) {
            return $this->sduser=$sd_users[0]->user;
        }
        return $this->sduser='-';
    }

    /**
     * @var \Application\Gillbus\EtravelsBundle\Entity\Client
     *
     * @ORM\ManyToOne(targetEntity="Application\Gillbus\EtravelsBundle\Entity\Client")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="client_id", referencedColumnName="id")
     * })
     */
    private $client;



    /**
     * Set oid
     *
     * @param string $oid
     *
     * @return Order
     */
    public function setOid($oid)
    {
        $this->oid = $oid;

        return $this;
    }

    /**
     * Get oid
     *
     * @return string
     */
    public function getOid()
    {
        return $this->oid;
    }

    /**
     * Set orderNumber
     *
     * @param string $orderNumber
     *
     * @return Order
     */
    public function setOrderNumber($orderNumber)
    {
        $this->orderNumber = $orderNumber;

        return $this;
    }

    /**
     * Get orderNumber
     *
     * @return string
     */
    public function getOrderNumber()
    {
        return $this->orderNumber;
    }

    private $novaPoshtaAmount = 0;
    /**
     * Get novaPoshtaAmount
     *
     * @return string
     */
    public function getNovaPoshtaAmount()
    {
        $posts = $this->postings->toArray();
        $amount = 0;
        foreach($posts as $posting) {
            if($posting->getPostingType() == 'nova_poshta_amount') {
                $amount = $posting->getAmount();
            }
        }
        return $this->novaPoshtaAmount = 0+(float)$amount;
    }
    private $novaPoshtaTax = 0;
    /**
     * Get novaPoshtaTax
     *
     * @return string
     */
    public function getNovaPoshtaTax()
    {
        $posts = $this->postings->toArray();
        $amount = 0;
        foreach($posts as $posting) {
            if($posting->getPostingType() == 'nova_poshta_tax') {
                $amount = $posting->getAmount();
            }
        }
        return $this->novaPoshtaTax = 0+(float)$amount;
    }

    private $novaPoshtaCheat = 0;
    /**
     * Get novaPoshtaCheat
     *
     * @return string
     */
    public function getNovaPoshtaCheat()
    {
        $posts = $this->postings->toArray();
        $amount = 0;
        foreach($posts as $posting) {
            if($posting->getPostingType() == 'nova_poshta_cheat') {
                $amount = $posting->getAmount();
            }
        }
        return $this->novaPoshtaCheat = 0+(float)$amount;
    }


    /**
     * @ORM\OneToMany(targetEntity="Posting", mappedBy="order")
     */
    private $postings;

    /**
     * Get postings
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPostings()
    {
        return $this->postings;
    }


    /**
     * Get systemNumber
     *
     * @return string
     */
    public function getSystemNumber()
    {
        return $this->systemNumber;
    }
    /**
     * Get orderAmount
     *
     * @return string
     */
    public function getOrderAmount()
    {
        return 0+(float)$this->orderAmount;
    }

    /**
     * Set isBooking
     *
     * @param boolean $isBooking
     *
     * @return Order
     */
    public function setIsBooking($isBooking)
    {
        $this->isBooking = $isBooking;

        return $this;
    }

    /**
     * Get isBooking
     *
     * @return boolean
     */
    public function getIsBooking()
    {
        return $this->isBooking;
    }

    /**
     * Set refererUri
     *
     * @param string $refererUri
     *
     * @return Order
     */
    public function setRefererUri($refererUri)
    {
        $this->refererUri = $refererUri;

        return $this;
    }

    /**
     * Get refererUri
     *
     * @return string
     */
    public function getRefererUri()
    {
        return $this->refererUri;
    }

    /**
     * Set resource
     *
     * @param string $resource
     *
     * @return Order
     */
    public function setResource($resource)
    {
        $this->resource = $resource;

        return $this;
    }

    /**
     * Get resource
     *
     * @return string
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * Set joinBookBuy
     *
     * @param boolean $joinBookBuy
     *
     * @return Order
     */
    public function setJoinBookBuy($joinBookBuy)
    {
        $this->joinBookBuy = $joinBookBuy;

        return $this;
    }

    /**
     * Get joinBookBuy
     *
     * @return boolean
     */
    public function getJoinBookBuy()
    {
        return $this->joinBookBuy;
    }

    /**
     * Set passangers
     *
     * @param string $passangers
     *
     * @return Order
     */
    public function setPassangers($passangers)
    {
        $this->passangers = $passangers;

        return $this;
    }

    /**
     * Get passangers
     *
     * @return string
     */
    public function getPassangers()
    {
        return $this->passangers;
    }

    /**
     * Set dateCreate
     *
     * @param \DateTime $dateCreate
     *
     * @return Order
     */
    public function setDateCreate($dateCreate)
    {
        $this->dateCreate = $dateCreate;

        return $this;
    }

    /**
     * Get dateCreate
     *
     * @return \DateTime
     */
    public function getDateCreate()
    {
        return date('d.m.Y H:i', strtotime($this->dateCreate));
    }

    /**
     * Get dateEndReservation
     *
     * @return string
     */
    public function getDateEndReservation()
    {
        return empty($this->dateEndReservation) ? '' : date('d.m.Y H:i', strtotime($this->dateEndReservation));
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
     * Set status
     *
     * @param \Application\Gillbus\EtravelsBundle\Entity\Status $status
     *
     * @return Order
     */
    public function setStatus(\Application\Gillbus\EtravelsBundle\Entity\Status $status = null)
    {
        $this->status = $status;

        return $this;
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
     * Set client
     *
     * @param \Application\Gillbus\EtravelsBundle\Entity\Client $client
     *
     * @return Order
     */
    public function setClient(\Application\Gillbus\EtravelsBundle\Entity\Client $client = null)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \Application\Gillbus\EtravelsBundle\Entity\Client
     */
    public function getClient()
    {
        return $this->client;
    }

    public function __toString()
    {
        return $this->getDateEndReservation();
    }

}
