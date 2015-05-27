<?php
/**
 * Created by PhpStorm.
 * User: donnie
 * Date: 25.05.15
 * Time: 15:40
 */

namespace Application\Gillbus\TicketsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Place
 *
 * @ORM\Table(name="place", uniqueConstraints={@ORM\UniqueConstraint(name="id", columns={"id"})})
 * @ORM\Entity
 *
 * @package Application\Gillbus\TicketsBundle\Entity
 */
class Place
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var
     * @ORM\Column(name="name_en", type="string", nullable=false)
     */
    protected $nameEn;

    /**
     * @var
     * @ORM\Column(name="name_th", type="string", nullable=false)
     */
    protected $nameTh;

    /**
     * @var
     * @ORM\Column(name="name_ru", type="string", nullable=false)
     */
    protected $nameRu;

    /**
     * @var
     * @ORM\Column(name="latitude", type="float", nullable=true)
     */
    protected $latitude;

    /**
     * @var
     * @ORM\Column(name="longitude", type="float", nullable=true)
     */
    protected $longitude;

    /**
     * @var
     * @ORM\Column(name="gillbus_id", type="string", nullable=false)
     */
    protected $gillbusId;

    /**
     * @var
     * @ORM\Column(name="place_type_id", type="integer", nullable=false)
     */
    protected $placeTypeId;

    /**
     * @var
     * @ORM\Column(name="parent_id", type="integer", nullable=true)
     */
    protected $parentId;

    /**
     * @var
     * @ORM\Column(name="gillbus_name_en", type="string", nullable=true)
     */
    protected $gillbusNameEn;

    /**
     * @var
     * @ORM\Column(name="gillbus_name_th", type="string", nullable=true)
     */
    protected $gillbusNameTh;

    /**
     * @var
     * @ORM\Column(name="gillbus_name_ru", type="string", nullable=true)
     */
    protected $gillbusNameRu;

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
    public function getNameEn()
    {
        return $this->nameEn;
    }

    /**
     * @param mixed $nameEn
     */
    public function setNameEn($nameEn)
    {
        $this->nameEn = $nameEn;
    }

    /**
     * @return mixed
     */
    public function getNameTh()
    {
        return $this->nameTh;
    }

    /**
     * @param mixed $nameTh
     */
    public function setNameTh($nameTh)
    {
        $this->nameTh = $nameTh;
    }

    /**
     * @return mixed
     */
    public function getNameRu()
    {
        return $this->nameRu;
    }

    /**
     * @param mixed $nameRu
     */
    public function setNameRu($nameRu)
    {
        $this->nameRu = $nameRu;
    }

    /**
     * @return mixed
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param mixed $latitude
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }

    /**
     * @return mixed
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param mixed $longitude
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }

    /**
     * @return mixed
     */
    public function getGillbusId()
    {
        return $this->gillbusId;
    }

    /**
     * @param mixed $gillbusId
     */
    public function setGillbusId($gillbusId)
    {
        $this->gillbusId = $gillbusId;
    }

    /**
     * @return mixed
     */
    public function getPlaceTypeId()
    {
        return $this->placeTypeId;
    }

    /**
     * @param mixed $placeTypeId
     */
    public function setPlaceTypeId($placeTypeId)
    {
        $this->placeTypeId = $placeTypeId;
    }

    /**
     * @return mixed
     */
    public function getParentId()
    {
        return $this->parentId;
    }

    /**
     * @param mixed $parentId
     */
    public function setParentId($parentId)
    {
        $this->parentId = $parentId;
    }

    /**
     * @return mixed
     */
    public function getGillbusNameEn()
    {
        return $this->gillbusNameEn;
    }

    /**
     * @param mixed $gillbusNameEn
     */
    public function setGillbusNameEn($gillbusNameEn)
    {
        $this->gillbusNameEn = $gillbusNameEn;
    }

    /**
     * @return mixed
     */
    public function getGillbusNameTh()
    {
        return $this->gillbusNameTh;
    }

    /**
     * @param mixed $gillbusNameTh
     */
    public function setGillbusNameTh($gillbusNameTh)
    {
        $this->gillbusNameTh = $gillbusNameTh;
    }

    /**
     * @return mixed
     */
    public function getGillbusNameRu()
    {
        return $this->gillbusNameRu;
    }

    /**
     * @param mixed $gillbusNameRu
     */
    public function setGillbusNameRu($gillbusNameRu)
    {
        $this->gillbusNameRu = $gillbusNameRu;
    }

    public function __toString()
    {
        return $this->nameEn;
    }


}