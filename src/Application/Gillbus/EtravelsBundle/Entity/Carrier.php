<?php

namespace Application\Gillbus\EtravelsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Carrier
 *
 * @ORM\Table(name="carrier")
 * @ORM\Entity
 */
class Carrier
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="recource_id", type="integer", nullable=false)
     */
    private $recourceId;

    /**
     * @var string
     *
     * @ORM\Column(name="gillbus_reg", type="string", length=255, nullable=false)
     */
    private $gillbusReg;

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
     * @return Carrier
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
     * Set recourceId
     *
     * @param integer $recourceId
     *
     * @return Carrier
     */
    public function setRecourceId($recourceId)
    {
        $this->recourceId = $recourceId;

        return $this;
    }

    /**
     * Get recourceId
     *
     * @return integer
     */
    public function getRecourceId()
    {
        return $this->recourceId;
    }

    /**
     * Set gillbusReg
     *
     * @param string $gillbusReg
     *
     * @return Carrier
     */
    public function setGillbusReg($gillbusReg)
    {
        $this->gillbusReg = $gillbusReg;

        return $this;
    }

    /**
     * Get gillbusReg
     *
     * @return string
     */
    public function getGillbusReg()
    {
        return $this->gillbusReg;
    }

    /**
     * Set ownTicket
     *
     * @param boolean $ownTicket
     *
     * @return Carrier
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
