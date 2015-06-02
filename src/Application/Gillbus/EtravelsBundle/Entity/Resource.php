<?php

namespace Application\Gillbus\EtravelsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Resource
 *
 * @ORM\Table(name="resource")
 * @ORM\Entity
 */
class Resource
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="gillbus_id", type="string", length=6, nullable=false)
     */
    private $gillbusId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="own_ticket", type="boolean", nullable=false)
     */
    private $ownTicket = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set name
     *
     * @param string $name
     *
     * @return Resource
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set gillbusId
     *
     * @param string $gillbusId
     *
     * @return Resource
     */
    public function setGillbusId($gillbusId)
    {
        $this->gillbusId = $gillbusId;

        return $this;
    }

    /**
     * Get gillbusId
     *
     * @return string
     */
    public function getGillbusId()
    {
        return $this->gillbusId;
    }

    /**
     * Set ownTicket
     *
     * @param boolean $ownTicket
     *
     * @return Resource
     */
    public function setOwnTicket($ownTicket)
    {
        $this->ownTicket = $ownTicket;

        return $this;
    }

    /**
     * Get ownTicket
     *
     * @return boolean
     */
    public function getOwnTicket()
    {
        return $this->ownTicket;
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
}
