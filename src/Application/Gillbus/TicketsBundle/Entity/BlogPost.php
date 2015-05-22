<?php

namespace Application\Gillbus\TicketsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BlogPost
 *
 * @ORM\Table(name="blog_post", uniqueConstraints={@ORM\UniqueConstraint(name="id", columns={"id"})})
 * @ORM\Entity
 */
class BlogPost
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     * @ORM\Column(name="category_id", type="integer", nullable=false)
     */
    private $categoryId;

    /**
     * @var string
     * @ORM\Column(name="image_url", type="string", nullable=false)
     */
    private $imageUrl;

    /**
     * @var string
     * @ORM\Column(name="title_th", type="string", nullable=false)
     */
    private $titleTh;

    /**
     * @var string
     * @ORM\Column(name="title_en", type="string", nullable=false)
     */
    private $titleEn;

    /**
     * @var string
     * @ORM\Column(name="title_ru", type="string", nullable=false)
     */
    private $titleRu;

    /**
     * @var string
     * @ORM\Column(name="title_page_th", type="string", nullable=false)
     */
    private $titlePageTh;

    /**
     * @var string
     * @ORM\Column(name="title_page_en", type="string", nullable=false)
     */
    private $titlePageEn;

    /**
     * @var string
     * @ORM\Column(name="title_page_ru", type="string", nullable=false)
     */
    private $titlePageRu;

    /**
     * @var string
     * @ORM\Column(name="short_content_th", type="text", nullable=true)
     */
    private $shortContentTh;

    /**
     * @var string
     * @ORM\Column(name="short_content_en", type="text", nullable=true)
     */
    private $shortContentEn;

    /**
     * @var string
     * @ORM\Column(name="short_content_ru", type="text", nullable=true)
     */
    private $shortContentRu;

    /**
     * @var string
     * @ORM\Column(name="content_th", type="text", nullable=true)
     */
    private $contentTh;

    /**
     * @var string
     * @ORM\Column(name="content_en", type="text", nullable=true)
     */
    private $contentEn;

    /**
     * @var string
     * @ORM\Column(name="content_ru", type="text", nullable=true)
     */
    private $contentRu;

    /**
     * @var string
     * @ORM\Column(name="description_th", type="text", nullable=true)
     */
    private $descriptionTh;

    /**
     * @var string
     * @ORM\Column(name="description_en", type="text", nullable=true)
     */
    private $descriptionEn;

    /**
     * @var string
     * @ORM\Column(name="description_ru", type="text", nullable=true)
     */
    private $descriptionRu;

    /**
     * @var string
     * @ORM\Column(name="keywords_th", type="text", nullable=true)
     */
    private $keywordsTh;

    /**
     * @var string
     * @ORM\Column(name="keywords_en", type="text", nullable=true)
     */
    private $keywordsEn;

    /**
     * @var string
     * @ORM\Column(name="keywords_ru", type="text", nullable=true)
     */
    private $keywordsRu;

    /**
     * @var \DateTime
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var \DateTime
     * @ORM\Column(name="published_at", type="datetime", nullable=false)
     */
    private $publishedAt;

    /**
     * @var boolean
     * @ORM\Column(name="is_deleted", type="boolean", nullable=false)
     */
    private $isDeleted;


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
     * Set categoryId
     *
     * @param integer $categoryId
     * @return BlogPost
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;

        return $this;
    }

    /**
     * Get categoryId
     *
     * @return integer 
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * Set imageUrl
     *
     * @param string $imageUrl
     * @return BlogPost
     */
    public function setImageUrl($imageUrl)
    {
        $this->imageUrl = $imageUrl;

        return $this;
    }

    /**
     * Get imageUrl
     *
     * @return string 
     */
    public function getImageUrl()
    {
        return $this->imageUrl;
    }

    /**
     * Set titleTh
     *
     * @param string $titleTh
     * @return BlogPost
     */
    public function setTitleTh($titleTh)
    {
        $this->titleTh = $titleTh;

        return $this;
    }

    /**
     * Get titleTh
     *
     * @return string 
     */
    public function getTitleTh()
    {
        return $this->titleTh;
    }

    /**
     * Set titleEn
     *
     * @param string $titleEn
     * @return BlogPost
     */
    public function setTitleEn($titleEn)
    {
        $this->titleEn = $titleEn;

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
     * Set titleRu
     *
     * @param string $titleRu
     * @return BlogPost
     */
    public function setTitleRu($titleRu)
    {
        $this->titleRu = $titleRu;

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
     * Set titlePageTh
     *
     * @param string $titlePageTh
     * @return BlogPost
     */
    public function setTitlePageTh($titlePageTh)
    {
        $this->titlePageTh = $titlePageTh;

        return $this;
    }

    /**
     * Get titlePageTh
     *
     * @return string 
     */
    public function getTitlePageTh()
    {
        return $this->titlePageTh;
    }

    /**
     * Set titlePageEn
     *
     * @param string $titlePageEn
     * @return BlogPost
     */
    public function setTitlePageEn($titlePageEn)
    {
        $this->titlePageEn = $titlePageEn;

        return $this;
    }

    /**
     * Get titlePageEn
     *
     * @return string 
     */
    public function getTitlePageEn()
    {
        return $this->titlePageEn;
    }

    /**
     * Set titlePageRu
     *
     * @param string $titlePageRu
     * @return BlogPost
     */
    public function setTitlePageRu($titlePageRu)
    {
        $this->titlePageRu = $titlePageRu;

        return $this;
    }

    /**
     * Get titlePageRu
     *
     * @return string 
     */
    public function getTitlePageRu()
    {
        return $this->titlePageRu;
    }

    /**
     * Set shortContentTh
     *
     * @param string $shortContentTh
     * @return BlogPost
     */
    public function setShortContentTh($shortContentTh)
    {
        $this->shortContentTh = $shortContentTh;

        return $this;
    }

    /**
     * Get shortContentTh
     *
     * @return string 
     */
    public function getShortContentTh()
    {
        return $this->shortContentTh;
    }

    /**
     * Set shortContentEn
     *
     * @param string $shortContentEn
     * @return BlogPost
     */
    public function setShortContentEn($shortContentEn)
    {
        $this->shortContentEn = $shortContentEn;

        return $this;
    }

    /**
     * Get shortContentEn
     *
     * @return string 
     */
    public function getShortContentEn()
    {
        return $this->shortContentEn;
    }

    /**
     * Set shortContentRu
     *
     * @param string $shortContentRu
     * @return BlogPost
     */
    public function setShortContentRu($shortContentRu)
    {
        $this->shortContentRu = $shortContentRu;

        return $this;
    }

    /**
     * Get shortContentRu
     *
     * @return string 
     */
    public function getShortContentRu()
    {
        return $this->shortContentRu;
    }

    /**
     * Set contentTh
     *
     * @param string $contentTh
     * @return BlogPost
     */
    public function setContentTh($contentTh)
    {
        $this->contentTh = $contentTh;

        return $this;
    }

    /**
     * Get contentTh
     *
     * @return string 
     */
    public function getContentTh()
    {
        return $this->contentTh;
    }

    /**
     * Set contentEn
     *
     * @param string $contentEn
     * @return BlogPost
     */
    public function setContentEn($contentEn)
    {
        $this->contentEn = $contentEn;

        return $this;
    }

    /**
     * Get contentEn
     *
     * @return string 
     */
    public function getContentEn()
    {
        return $this->contentEn;
    }

    /**
     * Set contentRu
     *
     * @param string $contentRu
     * @return BlogPost
     */
    public function setContentRu($contentRu)
    {
        $this->contentRu = $contentRu;

        return $this;
    }

    /**
     * Get contentRu
     *
     * @return string 
     */
    public function getContentRu()
    {
        return $this->contentRu;
    }

    /**
     * Set descriptionTh
     *
     * @param string $descriptionTh
     * @return BlogPost
     */
    public function setDescriptionTh($descriptionTh)
    {
        $this->descriptionTh = $descriptionTh;

        return $this;
    }

    /**
     * Get descriptionTh
     *
     * @return string 
     */
    public function getDescriptionTh()
    {
        return $this->descriptionTh;
    }

    /**
     * Set descriptionEn
     *
     * @param string $descriptionEn
     * @return BlogPost
     */
    public function setDescriptionEn($descriptionEn)
    {
        $this->descriptionEn = $descriptionEn;

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
     * Set descriptionRu
     *
     * @param string $descriptionRu
     * @return BlogPost
     */
    public function setDescriptionRu($descriptionRu)
    {
        $this->descriptionRu = $descriptionRu;

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
     * Set keywordsTh
     *
     * @param string $keywordsTh
     * @return BlogPost
     */
    public function setKeywordsTh($keywordsTh)
    {
        $this->keywordsTh = $keywordsTh;

        return $this;
    }

    /**
     * Get keywordsTh
     *
     * @return string 
     */
    public function getKeywordsTh()
    {
        return $this->keywordsTh;
    }

    /**
     * Set keywordsEn
     *
     * @param string $keywordsEn
     * @return BlogPost
     */
    public function setKeywordsEn($keywordsEn)
    {
        $this->keywordsEn = $keywordsEn;

        return $this;
    }

    /**
     * Get keywordsRu
     *
     * @return string 
     */
    public function getKeywordsEn()
    {
        return $this->keywordsEn;
    }

    /**
     * Set $keywordsRu
     *
     * @param string $keywordsRu
     * @return BlogPost
     */
    public function setKeywordsRu($keywordsRu)
    {
        $this->keywordsRu = $keywordsRu;

        return $this;
    }

    /**
     * Get keywirdsRu
     *
     * @return string 
     */
    public function getKeywordsRu()
    {
        return $this->keywordsRu;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return BlogPost
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set publishedAt
     *
     * @param \DateTime $publishedAt
     * @return BlogPost
     */
    public function setPublishedAt($publishedAt)
    {
        $this->publishedAt = $publishedAt;

        return $this;
    }

    /**
     * Get publishedAt
     *
     * @return \DateTime 
     */
    public function getPublishedAt()
    {
        return $this->publishedAt;
    }

    /**
     * Set isDeleted
     *
     * @param boolean $isDeleted
     * @return BlogPost
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
}
