<?php
/**
 * Created by PhpStorm.
 * User: donnie
 * Date: 25.05.15
 * Time: 16:45
 */

namespace Application\Gillbus\TicketsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class PromoCode
 *
 * @ORM\Table(name="promo_code", uniqueConstraints={@ORM\UniqueConstraint(name="id", columns={"id"})})
 * @ORM\Entity
 *
 * @package Application\Gillbus\TicketsBundle\Entity
 */
class PromoCode
{

    /**
     * @var
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

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
     * @ORM\Column(name="code", type="string", nullable=false)
     */
    protected $code;

    /**
     * @var
     * @ORM\Column(name="value", type="decimal", nullable=false)
     */
    protected $value;

    /**
     * @var
     * @ORM\Column(name="discount_value", type="decimal", nullable=false)
     */
    protected $discountValue;

    /**
     * @var
     * @ORM\Column(name="discount_percent", type="decimal", nullable=false)
     */
    protected $discountPercent;

    /**
     * @var
     * @ORM\Column(name="success_en", type="string", nullable=false)
     */
    protected $successEn;

    /**
     * @var
     * @ORM\Column(name="success_th", type="string", nullable=false)
     */
    protected $successTh;

    /**
     * @var
     * @ORM\Column(name="success_ru", type="string", nullable=false)
     */
    protected $successRu;

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
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param mixed $code
     */
    public function setCode($code)
    {
        $this->code = $code;
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
    public function getDiscountValue()
    {
        return $this->discountValue;
    }

    /**
     * @param mixed $discountValue
     */
    public function setDiscountValue($discountValue)
    {
        $this->discountValue = $discountValue;
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
    public function getSuccessEn()
    {
        return $this->successEn;
    }

    /**
     * @param mixed $successEn
     */
    public function setSuccessEn($successEn)
    {
        $this->successEn = $successEn;
    }

    /**
     * @return mixed
     */
    public function getSuccessTh()
    {
        return $this->successTh;
    }

    /**
     * @param mixed $successTh
     */
    public function setSuccessTh($successTh)
    {
        $this->successTh = $successTh;
    }

    /**
     * @return mixed
     */
    public function getSuccessRu()
    {
        return $this->successRu;
    }

    /**
     * @param mixed $successRu
     */
    public function setSuccessRu($successRu)
    {
        $this->successRu = $successRu;
    }



}