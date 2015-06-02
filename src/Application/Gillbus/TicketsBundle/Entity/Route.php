<?php
/**
 * Created by PhpStorm.
 * User: donnie
 * Date: 25.05.15
 * Time: 15:55
 */

namespace Application\Gillbus\TicketsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Route
 *
 * @ORM\Table(name="route", uniqueConstraints={@ORM\UniqueConstraint(name="id", columns={"id"})})
 * @ORM\Entity
 *
 * @package Application\Gillbus\TicketsBundle\Entity
 */
class Route
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
     * @ORM\Column(name="url", type="string", nullable=false)
     */
    protected $url;

    /**
     * @var
     * @ORM\Column(name="title_th", type="string", nullable=false)
     */
    protected $titleTh;

    /**
     * @var
     * @ORM\Column(name="title_en", type="string", nullable=false)
     */
    protected $titleEn;

    /**
     * @var
     * @ORM\Column(name="title_ru", type="string", nullable=false)
     */
    protected $titleRu;

    /**
     * @var
     * @ORM\Column(name="title_page_en", type="string", nullable=false)
     */
    protected $titlePageEn;

    /**
     * @var
     * @ORM\Column(name="title_page_th", type="string", nullable=false)
     */
    protected $titlePageTh;

    /**
     * @var
     * @ORM\Column(name="title_page_ru", type="string", nullable=false)
     */
    protected $titlePageRu;

    /**
     * @var
     * @ORM\Column(name="content_en", type="text", nullable=true)
     */
    protected $contentEn;

    /**
     * @var
     * @ORM\Column(name="content_th", type="text", nullable=true)
     */
    protected $contentTh;

    /**
     * @var
     * @ORM\Column(name="content_ru", type="text", nullable=true)
     */
    protected $contentRu;

    /**
     * @var
     * @ORM\Column(name="description_en", type="text", nullable=true)
     */
    protected $descriptionEn;

    /**
     * @var
     * @ORM\Column(name="description_th", type="text", nullable=true)
     */
    protected $descriptionTh;

    /**
     * @var
     * @ORM\Column(name="description_ru", type="text", nullable=true)
     */
    protected $descriptionRu;

    /**
     * @var
     * @ORM\Column(name="keywords_en", type="string", nullable=true)
     */
    protected $keywordsEn;

    /**
     * @var
     * @ORM\Column(name="keywords_th", type="string", nullable=true)
     */
    protected $keywordsTh;

    /**
     * @var
     * @ORM\Column(name="keywords_ru", type="string", nullable=true)
     */
    protected $keywordsRu;

    /**
     * @var boolean
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
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param mixed $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @return mixed
     */
    public function getTitleTh()
    {
        return $this->titleTh;
    }

    /**
     * @param mixed $titleTh
     */
    public function setTitleTh($titleTh)
    {
        $this->titleTh = $titleTh;
    }

    /**
     * @return mixed
     */
    public function getTitleEn()
    {
        return $this->titleEn;
    }

    /**
     * @param mixed $titleEn
     */
    public function setTitleEn($titleEn)
    {
        $this->titleEn = $titleEn;
    }

    /**
     * @return mixed
     */
    public function getTitleRu()
    {
        return $this->titleRu;
    }

    /**
     * @param mixed $titleRu
     */
    public function setTitleRu($titleRu)
    {
        $this->titleRu = $titleRu;
    }

    /**
     * @return mixed
     */
    public function getTitlePageEn()
    {
        return $this->titlePageEn;
    }

    /**
     * @param mixed $titlePageEn
     */
    public function setTitlePageEn($titlePageEn)
    {
        $this->titlePageEn = $titlePageEn;
    }

    /**
     * @return mixed
     */
    public function getTitlePageTh()
    {
        return $this->titlePageTh;
    }

    /**
     * @param mixed $titlePageTh
     */
    public function setTitlePageTh($titlePageTh)
    {
        $this->titlePageTh = $titlePageTh;
    }

    /**
     * @return mixed
     */
    public function getTitlePageRu()
    {
        return $this->titlePageRu;
    }

    /**
     * @param mixed $titlePageRu
     */
    public function setTitlePageRu($titlePageRu)
    {
        $this->titlePageRu = $titlePageRu;
    }

    /**
     * @return mixed
     */
    public function getContentEn()
    {
        return $this->contentEn;
    }

    /**
     * @param mixed $contentEn
     */
    public function setContentEn($contentEn)
    {
        $this->contentEn = $contentEn;
    }

    /**
     * @return mixed
     */
    public function getContentTh()
    {
        return $this->contentTh;
    }

    /**
     * @param mixed $contentTh
     */
    public function setContentTh($contentTh)
    {
        $this->contentTh = $contentTh;
    }

    /**
     * @return mixed
     */
    public function getContentRu()
    {
        return $this->contentRu;
    }

    /**
     * @param mixed $contentRu
     */
    public function setContentRu($contentRu)
    {
        $this->contentRu = $contentRu;
    }

    /**
     * @return mixed
     */
    public function getDescriptionEn()
    {
        return $this->descriptionEn;
    }

    /**
     * @param mixed $descriptionEn
     */
    public function setDescriptionEn($descriptionEn)
    {
        $this->descriptionEn = $descriptionEn;
    }

    /**
     * @return mixed
     */
    public function getDescriptionTh()
    {
        return $this->descriptionTh;
    }

    /**
     * @param mixed $descriptionTh
     */
    public function setDescriptionTh($descriptionTh)
    {
        $this->descriptionTh = $descriptionTh;
    }

    /**
     * @return mixed
     */
    public function getDescriptionRu()
    {
        return $this->descriptionRu;
    }

    /**
     * @param mixed $descriptionRu
     */
    public function setDescriptionRu($descriptionRu)
    {
        $this->descriptionRu = $descriptionRu;
    }

    /**
     * @return mixed
     */
    public function getKeywordsEn()
    {
        return $this->keywordsEn;
    }

    /**
     * @param mixed $keywordsEn
     */
    public function setKeywordsEn($keywordsEn)
    {
        $this->keywordsEn = $keywordsEn;
    }

    /**
     * @return mixed
     */
    public function getKeywordsTh()
    {
        return $this->keywordsTh;
    }

    /**
     * @param mixed $keywordsTh
     */
    public function setKeywordsTh($keywordsTh)
    {
        $this->keywordsTh = $keywordsTh;
    }

    /**
     * @return mixed
     */
    public function getKeywordsRu()
    {
        return $this->keywordsRu;
    }

    /**
     * @param mixed $keywordsRu
     */
    public function setKeywordsRu($keywordsRu)
    {
        $this->keywordsRu = $keywordsRu;
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