<?php

namespace Application\Gillbus\EtravelsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Agent
 *
 * @ORM\Table(name="agent")
 * @ORM\Entity
 */
class Agent
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var boolean
     *
     * @ORM\Column(name="own_email", type="boolean", nullable=false)
     */
    private $ownEmail = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="gillbus_key", type="string", length=255, nullable=false)
     */
    private $gillbusKey;

    /**
     * @var string
     *
     * @ORM\Column(name="alias", type="string", length=255, nullable=true)
     */
    private $alias;

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
     * @return Agent
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
     * Set ownEmail
     *
     * @param boolean $ownEmail
     *
     * @return Agent
     */
    public function setOwnEmail($ownEmail)
    {
        $this->ownEmail = $ownEmail;

        return $this;
    }

    /**
     * Get ownEmail
     *
     * @return boolean
     */
    public function getOwnEmail()
    {
        return $this->ownEmail;
    }

    /**
     * Set gillbusKey
     *
     * @param string $gillbusKey
     *
     * @return Agent
     */
    public function setGillbusKey($gillbusKey)
    {
        $this->gillbusKey = $gillbusKey;

        return $this;
    }

    /**
     * Get gillbusKey
     *
     * @return string
     */
    public function getGillbusKey()
    {
        return $this->gillbusKey;
    }

    /**
     * Set alias
     *
     * @param string $alias
     *
     * @return Agent
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;

        return $this;
    }

    /**
     * Get alias
     *
     * @return string
     */
    public function getAlias()
    {
        return $this->alias;
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
