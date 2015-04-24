<?php

namespace Application\Gillbus\EtravelsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RefferalAction
 *
 * @ORM\Table(name="refferal_action")
 * @ORM\Entity
 */
class RefferalAction
{
    /**
     * @var string
     *
     * @ORM\Column(name="object_id", type="string", length=255, nullable=true)
     */
    private $objectId;

    /**
     * @var string
     *
     * @ORM\Column(name="object_name", type="string", length=255, nullable=true)
     */
    private $objectName;

    /**
     * @var string
     *
     * @ORM\Column(name="action", type="string", length=255, nullable=true)
     */
    private $action;

    /**
     * @var string
     *
     * @ORM\Column(name="utm_source", type="string", length=255, nullable=true)
     */
    private $utmSource;

    /**
     * @var string
     *
     * @ORM\Column(name="utm_medium", type="string", length=255, nullable=true)
     */
    private $utmMedium;

    /**
     * @var string
     *
     * @ORM\Column(name="utm_term", type="string", length=255, nullable=true)
     */
    private $utmTerm;

    /**
     * @var string
     *
     * @ORM\Column(name="utm_campaign", type="string", length=255, nullable=true)
     */
    private $utmCampaign;

    /**
     * @var string
     *
     * @ORM\Column(name="sd_user", type="string", length=255, nullable=true)
     */
    private $sdUser = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_update", type="datetime", nullable=true)
     */
    private $dateUpdate;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set objectId
     *
     * @param string $objectId
     *
     * @return RefferalAction
     */
    public function setObjectId($objectId)
    {
        $this->objectId = $objectId;

        return $this;
    }

    /**
     * Get objectId
     *
     * @return string
     */
    public function getObjectId()
    {
        return $this->objectId;
    }

    /**
     * Set objectName
     *
     * @param string $objectName
     *
     * @return RefferalAction
     */
    public function setObjectName($objectName)
    {
        $this->objectName = $objectName;

        return $this;
    }

    /**
     * Get objectName
     *
     * @return string
     */
    public function getObjectName()
    {
        return $this->objectName;
    }

    /**
     * Set action
     *
     * @param string $action
     *
     * @return RefferalAction
     */
    public function setAction($action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * Get action
     *
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Set utmSource
     *
     * @param string $utmSource
     *
     * @return RefferalAction
     */
    public function setUtmSource($utmSource)
    {
        $this->utmSource = $utmSource;

        return $this;
    }

    /**
     * Get utmSource
     *
     * @return string
     */
    public function getUtmSource()
    {
        return $this->utmSource;
    }

    /**
     * Set utmMedium
     *
     * @param string $utmMedium
     *
     * @return RefferalAction
     */
    public function setUtmMedium($utmMedium)
    {
        $this->utmMedium = $utmMedium;

        return $this;
    }

    /**
     * Get utmMedium
     *
     * @return string
     */
    public function getUtmMedium()
    {
        return $this->utmMedium;
    }

    /**
     * Set utmTerm
     *
     * @param string $utmTerm
     *
     * @return RefferalAction
     */
    public function setUtmTerm($utmTerm)
    {
        $this->utmTerm = $utmTerm;

        return $this;
    }

    /**
     * Get utmTerm
     *
     * @return string
     */
    public function getUtmTerm()
    {
        return $this->utmTerm;
    }

    /**
     * Set utmCampaign
     *
     * @param string $utmCampaign
     *
     * @return RefferalAction
     */
    public function setUtmCampaign($utmCampaign)
    {
        $this->utmCampaign = $utmCampaign;

        return $this;
    }

    /**
     * Get utmCampaign
     *
     * @return string
     */
    public function getUtmCampaign()
    {
        return $this->utmCampaign;
    }

    /**
     * Set sdUser
     *
     * @param string $sdUser
     *
     * @return RefferalAction
     */
    public function setSdUser($sdUser)
    {
        $this->sdUser = $sdUser;

        return $this;
    }

    /**
     * Get sdUser
     *
     * @return string
     */
    public function getSdUser()
    {
        return $this->sdUser;
    }

    /**
     * Set dateUpdate
     *
     * @param \DateTime $dateUpdate
     *
     * @return RefferalAction
     */
    public function setDateUpdate($dateUpdate)
    {
        $this->dateUpdate = $dateUpdate;

        return $this;
    }

    /**
     * Get dateUpdate
     *
     * @return \DateTime
     */
    public function getDateUpdate()
    {
        return $this->dateUpdate;
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
