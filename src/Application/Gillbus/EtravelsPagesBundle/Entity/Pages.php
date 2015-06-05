<?php

namespace Application\Gillbus\EtravelsPagesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pages
 *
 * @ORM\Table(name="page")
 * @ORM\Entity
 */
class Pages
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=1023)
     */
    private $url;

    /**
     * @ORM\Column(name="type", type="string", columnDefinition="enum('bus', 'avia', 'train', 'transfer', 'none')")
     */
    private $type;

    /**
     * @var boolean
     * @ORM\Column(name="is_deleted", type="boolean")
     */
    private $isDeleted;

    /**
     * @var boolean
     * @ORM\Column(name="has_benefits", type="boolean")
     */
    private $hasBenefits;

    /**
     * @var string
     *
     * @ORM\Column(name="title_ru", type="string", length=1023)
     */
    private $titleRu;
    /**
     * @var string
     *
     * @ORM\Column(name="description_ru", type="string", length=1023)
     */
    private $descriptionRu;
    /**
     * @var string
     *
     * @ORM\Column(name="keywords_ru", type="string", length=1023)
     */
    private $keywordsRu;
    /**
     * @var string
     *
     * @ORM\Column(name="visible_text_ru", type="string", length=1023)
     */
    private $visibleTextRu;
    /**
     * @var string
     *
     * @ORM\Column(name="hidden_text_ru", type="string", length=1023)
     */
    private $hiddenTextRu;
    /**
     * @var string
     *
     * @ORM\Column(name="title_en", type="string", length=1023)
     */
    private $titleEn;
    /**
     * @var string
     *
     * @ORM\Column(name="description_en", type="string", length=1023)
     */
    private $descriptionEn;
    /**
     * @var string
     *
     * @ORM\Column(name="keywords_en", type="string", length=1023)
     */
    private $keywordsEn;
    /**
     * @var string
     *
     * @ORM\Column(name="visible_text_en", type="string", length=1023)
     */
    private $visibleTextEn;
    /**
     * @var string
     *
     * @ORM\Column(name="hidden_text_en", type="string", length=1023)
     */
    private $hiddenTextEn;
    /**
     * @var string
     *
     * @ORM\Column(name="title_ua", type="string", length=1023)
     */
    private $titleUa;
    /**
     * @var string
     *
     * @ORM\Column(name="description_ua", type="string", length=1023)
     */
    private $descriptionUa;
    /**
     * @var string
     *
     * @ORM\Column(name="keywords_ua", type="string", length=1023)
     */
    private $keywordsUa;
    /**
     * @var string
     *
     * @ORM\Column(name="visible_text_ua", type="string", length=1023)
     */
    private $visibleTextUa;
    /**
     * @var string
     *
     * @ORM\Column(name="hidden_text_ua", type="string", length=1023)
     */
    private $hiddenTextUa;
    /**
     * @var string
     *
     * @ORM\Column(name="search_city_from", type="string", length=100)
     */
    private $searchCityFrom;
    /**
     * @var string
     *
     * @ORM\Column(name="search_city_to", type="string", length=100)
     */
    private $searchCityTo;

    /**
     * Set titleRu
     *
     * @param string $value
     * @return Pages
     */
    public function setTitleRu($value)
    {
        $this->titleRu = $value;
        return $this;
    }

    /**
     * Get titleRu
     *
     * @return string
     */
    public function getTitleRu()
    {
        return $this->titleRu;
    }
    /**
     * Set descriptionRu
     *
     * @param string $value
     * @return Pages
     */
    public function setDescriptionRu($value)
    {
        $this->descriptionRu = $value;
        return $this;
    }
    /**
     * Get descriptionRu
     *
     * @return string
     */
    public function getDescriptionRu()
    {
        return $this->descriptionRu;
    }
    /**
     * Set keywordsRu
     *
     * @param string $value
     * @return Pages
     */
    public function setKeywordsRu($value)
    {
        $this->keywordsRu = $value;
        return $this;
    }
    /**
     * Get keywordsRu
     *
     * @return string
     */
    public function getKeywordsRu()
    {
        return $this->keywordsRu;
    }
    /**
     * Set visibleTextRu
     *
     * @param string $value
     * @return Pages
     */
    public function setVisibleTextRu($value)
    {
        $this->visibleTextRu = $value;
        return $this;
    }
    /**
     * Get visibleTextRu
     *
     * @return string
     */
    public function getVisibleTextRu()
    {
        return $this->visibleTextRu;
    }
    /**
     * Set hiddenTextRu
     *
     * @param string $value
     * @return Pages
     */
    public function setHiddenTextRu($value)
    {
        $this->hiddenTextRu = $value;
        return $this;
    }
    /**
     * Get hiddenTextRu
     *
     * @return string
     */
    public function getHiddenTextRu()
    {
        return $this->hiddenTextRu;
    }


    /**
     * Set type
     *
     * @param string $value
     * @return Pages
     */
    public function setType($value)
    {
        $this->type = $value;
        return $this;
    }
    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }


    /**
     * Set titleEn
     *
     * @param string $value
     * @return Pages
     */
    public function setTitleEn($value)
    {
        $this->titleEn = $value;
        return $this;
    }
    /**
     * Get titleEn
     *
     * @return string
     */
    public function getTitleEn()
    {
        return $this->titleEn;
    }
    /**
     * Set descriptionEn
     *
     * @param string $value
     * @return Pages
     */
    public function setDescriptionEn($value)
    {
        $this->descriptionEn = $value;
        return $this;
    }
    /**
     * Get descriptionEn
     *
     * @return string
     */
    public function getDescriptionEn()
    {
        return $this->descriptionEn;
    }
    /**
     * Set keywordsEn
     *
     * @param string $value
     * @return Pages
     */
    public function setKeywordsEn($value)
    {
        $this->keywordsEn = $value;
        return $this;
    }
    /**
     * Get keywordsEn
     *
     * @return string
     */
    public function getKeywordsEn()
    {
        return $this->keywordsEn;
    }
    /**
     * Set visibleTextEn
     *
     * @param string $value
     * @return Pages
     */
    public function setVisibleTextEn($value)
    {
        $this->visibleTextEn = $value;
        return $this;
    }
    /**
     * Get visibleTextEn
     *
     * @return string
     */
    public function getVisibleTextEn()
    {
        return $this->visibleTextEn;
    }
    /**
     * Set hiddenTextEn
     *
     * @param string $value
     * @return Pages
     */
    public function setHiddenTextEn($value)
    {
        $this->hiddenTextEn = $value;
        return $this;
    }
    /**
     * Get hiddenTextEn
     *
     * @return string
     */
    public function getHiddenTextEn()
    {
        return $this->hiddenTextEn;
    }
    /**
     * Set titleUa
     *
     * @param string $value
     * @return Pages
     */
    public function setTitleUa($value)
    {
        $this->titleUa = $value;
        return $this;
    }
    /**
     * Get titleUa
     *
     * @return string
     */
    public function getTitleUa()
    {
        return $this->titleUa;
    }
    /**
     * Set descriptionUa
     *
     * @param string $value
     * @return Pages
     */
    public function setDescriptionUa($value)
    {
        $this->descriptionUa = $value;
        return $this;
    }
    /**
     * Get descriptionUa
     *
     * @return string
     */
    public function getDescriptionUa()
    {
        return $this->descriptionUa;
    }
    /**
     * Set keywordsUa
     *
     * @param string $value
     * @return Pages
     */
    public function setKeywordsUa($value)
    {
        $this->keywordsUa = $value;
        return $this;
    }
    /**
     * Get keywordsUa
     *
     * @return string
     */
    public function getKeywordsUa()
    {
        return $this->keywordsUa;
    }
    /**
     * Set visibleTextUa
     *
     * @param string $value
     * @return Pages
     */
    public function setVisibleTextUa($value)
    {
        $this->visibleTextUa = $value;
        return $this;
    }
    /**
     * Get visibleTextUa
     *
     * @return string
     */
    public function getVisibleTextUa()
    {
        return $this->visibleTextUa;
    }
    /**
     * Set hiddenTextUa
     *
     * @param string $value
     * @return Pages
     */
    public function setHiddenTextUa($value)
    {
        $this->hiddenTextUa = $value;
        return $this;
    }
    /**
     * Get hiddenTextUa
     *
     * @return string
     */
    public function getHiddenTextUa()
    {
        return $this->hiddenTextUa;
    }
    /**
     * Set searchCityFrom
     *
     * @param string $value
     * @return Pages
     */
    public function setSearchCityFrom($value)
    {
        $this->searchCityFrom = $value;
        return $this;
    }
    /**
     * Get searchCityFrom
     *
     * @return string
     */
    public function getSearchCityFrom()
    {
        return $this->searchCityFrom;
    }
    /**
     * Set searchCityTo
     *
     * @param string $value
     * @return Pages
     */
    public function setSearchCityTo($value)
    {
        $this->searchCityTo = $value;
        return $this;
    }
    /**
     * Get searchCityTo
     *
     * @return string
     */
    public function getSearchCityTo()
    {
        return $this->searchCityTo;
    }

    /**
     * Set url
     *
     * @param boolean $url
     * @return Pages
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
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
     * Set isDeleted
     *
     * @param boolean $isDeleted
     * @return Pages
     */
    public function setIsDeleted($isDeleted)
    {
        $this->isDeleted = $isDeleted;
        return $this;
    }
    /**
     * Get isDeleted
     *
     * @return boolean
     */
    public function getIsDeleted()
    {
        return $this->isDeleted;
    }

    /**
     * Set hasBenefits
     *
     * @param boolean $hasBenefits
     * @return Pages
     */
    public function setHasBenefits($hasBenefits)
    {
        $this->hasBenefits = $hasBenefits;
        return $this;
    }
    /**
     * Get hasBenefits
     *
     * @return boolean
     */
    public function getHasBenefits()
    {
        return $this->hasBenefits;
    }

  public function __toString() { return (string) $this->titleRu; }
}
