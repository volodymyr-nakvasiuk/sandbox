<?php
/**
 * Created by PhpStorm.
 * User: donnie
 * Date: 25.05.15
 * Time: 9:07
 */

namespace Application\Gillbus\TicketsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BlogCategory
 *
 * @ORM\Table(name="blog_category", uniqueConstraints={@ORM\UniqueConstraint(name="id", columns={"id"})})
 * @ORM\Entity
 */
class BlogCategory
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var
     * @ORM\Column(name="parent_id", type="integer", nullable=false)
     */
    protected $parentId;

    /**
     * @var
     * @ORM\Column(name="name_th", type="string", nullable=false)
     */
    protected $nameTh;

    /**
     * @var
     * @ORM\Column(name="name_en", type="string", nullable=false)
     */
    protected $nameEn;

    /**
     * @var
     * @ORM\Column(name="name_ru", type="string", nullable=false)
     */
    protected $nameRu;

    /**
     * @var
     * @ORM\Column(name="sort_id", type="integer", nullable=false)
     */
    protected $sortId;

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
    public function getParentId()
    {
        return $this->parentId;
    }

    /**
     * @param mixed $parentId
     */
    public function setParenId($parentId)
    {
        $this->parentId = $parentId;
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

    public function __toString()
    {
        return $this->nameEn;
    }

}