<?php
/**
 * Created by PhpStorm.
 * User: donnie
 * Date: 26.05.15
 * Time: 9:36
 */

namespace Application\Gillbus\TicketsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Class PopularTrip.
 *
 * @ORM\Table(name="promotion", uniqueConstraints={@ORM\UniqueConstraint(name="id", columns={"id"})})
 * @ORM\Entity
 *
 * @package Application\Gillbus\TicketsBundle\Entity
 */
class PopularTrip
{

    /**
     * @var integer
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var
     * @ORM\Column(name="image_url", type="string", nullable=true)
     */
    protected $imageUrl;

    /**
     * @var
     * @ORM\Column(name="sort_id", type="integer", nullable=false)
     */
    protected $sortId;

    /**
     * @var
     * @ORM\Column(name="depart_time", type="string", nullable=false)
     */
    protected $departTime;

    /**
     * @var
     * @ORM\Column(name="arrive_time", type="string", nullable=false)
     */
    protected $arriveTime;

    /**
     * @var
     * @ORM\Column(name="trip_duration", type="string", nullable=false)
     */
    protected $tripDuration;

    /**
     * @var
     * @ORM\Column(name="trip_cost", type="decimal", nullable=false)
     */
    protected $tripCost;

    /**
     * @var
     * @ORM\OneToOne(targetEntity="Place")
     * @ORM\JoinColumn(name="depart_place_id", referencedColumnName="id")
     */
    protected $departPlaceId;

    /**
     * @var
     * @ORM\OneToOne(targetEntity="Place")
     * @ORM\JoinColumn(name="arrive_place_id", referencedColumnName="id")
     */
    protected $arrivePlaceId;

    /**
     * @var
     * @ORM\Column(name="begin_date", type="datetime", nullable=false)
     */
    protected $beginDate;

    /**
     * @var
     * @ORM\Column(name="end_date", type="datetime", nullable=false)
     */
    protected $endDate;

    /**
     * @var
     * @ORM\Column(name="discount_value", type="decimal", nullable=false)
     */
    protected $dicountValue;

    /**
     * @var
     * @ORM\Column(name="discount_percent", type="decimal", nullable=false)
     */
    protected $discountPercent;

    /**
     * @var
     * @ORM\Column(name="value", type="decimal", nullable=false)
     */
    protected $value;

    /**
     * @var
     * @ORM\Column(name="is_deleted", type="boolean", nullable=false)
     */
    protected $isDeleted;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getImageUrl()
    {
        return $this->imageUrl;
    }

    /**
     * @param mixed $imageUrl
     */
    public function setImageUrl($imageUrl)
    {
        $this->imageUrl = $imageUrl;
    }

    /**
     * @return mixed
     */
    public function getSortId()
    {
        return $this->sortId;
    }

    /**
     * @param mixed $sortId
     */
    public function setSortId($sortId)
    {
        $this->sortId = $sortId;
    }



    /**
     * @return mixed
     */
    public function getDepartTime()
    {
        return $this->departTime;
    }

    /**
     * @param mixed $departTime
     */
    public function setDepartTime($departTime)
    {
        $this->departTime = $departTime;
    }

    /**
     * @return mixed
     */
    public function getArriveTime()
    {
        return $this->arriveTime;
    }

    /**
     * @param mixed $arriveTime
     */
    public function setArriveTime($arriveTime)
    {
        $this->arriveTime = $arriveTime;
    }

    /**
     * @return mixed
     */
    public function getTripDuration()
    {
        return $this->tripDuration;
    }

    /**
     * @param mixed $tripDuration
     */
    public function setTripDuration($tripDuration)
    {
        $this->tripDuration = $tripDuration;
    }

    /**
     * @return mixed
     */
    public function getTripCost()
    {
        return $this->tripCost;
    }

    /**
     * @param mixed $tripCost
     */
    public function setTripCost($tripCost)
    {
        $this->tripCost = $tripCost;
    }

    /**
     * @return mixed
     */
    public function getDepartPlaceId()
    {
        return $this->departPlaceId;
    }

    /**
     * @param mixed $departPlaceId
     */
    public function setDepartPlaceId($departPlaceId)
    {
        $this->departPlaceId = $departPlaceId;
    }

    /**
     * @return mixed
     */
    public function getArrivePlaceId()
    {
        return $this->arrivePlaceId;
    }

    /**
     * @param mixed $arrivePlaceId
     */
    public function setArrivePlaceId($arrivePlaceId)
    {
        $this->arrivePlaceId = $arrivePlaceId;
    }

    /**
     * @return mixed
     */
    public function getBeginDate()
    {
        return $this->beginDate;
    }

    /**
     * @param mixed $beginDate
     */
    public function setBeginDate($beginDate)
    {
        $this->beginDate = $beginDate;
    }

    /**
     * @return mixed
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param mixed $endDate
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
    }

    /**
     * @return mixed
     */
    public function getDicountValue()
    {
        return $this->dicountValue;
    }

    /**
     * @param mixed $dicountValue
     */
    public function setDicountValue($dicountValue)
    {
        $this->dicountValue = $dicountValue;
    }

    /**
     * @return mixed
     */
    public function getDiscountPercent()
    {
        return $this->discountPercent;
    }

    /**
     * @param mixed $discountPercent
     */
    public function setDiscountPercent($discountPercent)
    {
        $this->discountPercent = $discountPercent;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * @return mixed
     */
    public function getIsDeleted()
    {
        return $this->isDeleted;
    }

    /**
     * @param mixed $isDeleted
     */
    public function setIsDeleted($isDeleted)
    {
        $this->isDeleted = $isDeleted;
    }



}