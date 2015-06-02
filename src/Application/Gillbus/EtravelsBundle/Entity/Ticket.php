<?php

namespace Application\Gillbus\EtravelsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ticket
 *
 * @ORM\Table(name="ticket", indexes={@ORM\Index(name="order_id", columns={"order_id"})})
 * @ORM\Entity
 */
class Ticket
{
    /**
     * @var string
     *
     * @ORM\Column(name="ticket_number", type="string", length=255, nullable=false)
     */
    private $ticketNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="agent_reg", type="string", length=255, nullable=true)
     */
    private $agentReg;

    /**
     * @var string
     *
     * @ORM\Column(name="agent_code", type="string", length=255, nullable=true)
     */
    private $agentCode;

    /**
     * @var string
     *
     * @ORM\Column(name="ticket_json", type="text", length=65535, nullable=true)
     */
    private $ticketJson;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Application\Gillbus\EtravelsBundle\Entity\Order
     *
     * @ORM\ManyToOne(targetEntity="Application\Gillbus\EtravelsBundle\Entity\Order")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="order_id", referencedColumnName="id")
     * })
     */
    private $order;



    /**
     * Set ticketNumber
     *
     * @param string $ticketNumber
     *
     * @return Ticket
     */
    public function setTicketNumber($ticketNumber)
    {
        $this->ticketNumber = $ticketNumber;

        return $this;
    }

    /**
     * Get ticketNumber
     *
     * @return string
     */
    public function getTicketNumber()
    {
        return $this->ticketNumber;
    }

    /**
     * Set agentReg
     *
     * @param string $agentReg
     *
     * @return Ticket
     */
    public function setAgentReg($agentReg)
    {
        $this->agentReg = $agentReg;

        return $this;
    }

    /**
     * Get agentReg
     *
     * @return string
     */
    public function getAgentReg()
    {
        return $this->agentReg;
    }

    /**
     * Set agentCode
     *
     * @param string $agentCode
     *
     * @return Ticket
     */
    public function setAgentCode($agentCode)
    {
        $this->agentCode = $agentCode;

        return $this;
    }

    /**
     * Get agentCode
     *
     * @return string
     */
    public function getAgentCode()
    {
        return $this->agentCode;
    }

    /**
     * Set ticketJson
     *
     * @param string $ticketJson
     *
     * @return Ticket
     */
    public function setTicketJson($ticketJson)
    {
        $this->ticketJson = $ticketJson;

        return $this;
    }

    /**
     * Get ticketJson
     *
     * @return string
     */
    public function getTicketJson()
    {
        return $this->ticketJson;
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
     * Set order
     *
     * @param \Application\Gillbus\EtravelsBundle\Entity\Order $order
     *
     * @return Ticket
     */
    public function setOrder(\Application\Gillbus\EtravelsBundle\Entity\Order $order = null)
    {
        $this->order = $order;

        return $this;
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
}
