<?php

namespace Cmais\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Asset
 */
class Asset
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $slug;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $description;

    /**
     * @var integer
     */
    private $display_order;

    /**
     * @var boolean
     */
    private $is_active;

    /**
     * @var boolean
     */
    private $is_visible;

    /**
     * @var \DateTime
     */
    private $date_start;

    /**
     * @var \DateTime
     */
    private $date_end;

    /**
     * @var \DateTime
     */
    private $created_at;

    /**
     * @var \DateTime
     */
    private $updated_at;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $categories;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $sections;

    /**
     * @var \Cmais\ModelBundle\Entity\AssetType
     */
    private $asset_type;

    /**
     * @var \Cmais\ModelBundle\Entity\Site
     */
    private $site;

    /**
     * @var \Cmais\ModelBundle\Entity\Category
     */
    private $category;

    /**
     * @var \Cmais\ModelBundle\Entity\User
     */
    private $user;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->categories = new \Doctrine\Common\Collections\ArrayCollection();
        $this->sections = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set slug
     *
     * @param string $slug
     * @return Asset
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Asset
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Asset
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set display_order
     *
     * @param integer $displayOrder
     * @return Asset
     */
    public function setDisplayOrder($displayOrder)
    {
        $this->display_order = $displayOrder;

        return $this;
    }

    /**
     * Get display_order
     *
     * @return integer 
     */
    public function getDisplayOrder()
    {
        return $this->display_order;
    }

    /**
     * Set is_active
     *
     * @param boolean $isActive
     * @return Asset
     */
    public function setIsActive($isActive)
    {
        $this->is_active = $isActive;

        return $this;
    }

    /**
     * Get is_active
     *
     * @return boolean 
     */
    public function getIsActive()
    {
        return $this->is_active;
    }

    /**
     * Set is_visible
     *
     * @param boolean $isVisible
     * @return Asset
     */
    public function setIsVisible($isVisible)
    {
        $this->is_visible = $isVisible;

        return $this;
    }

    /**
     * Get is_visible
     *
     * @return boolean 
     */
    public function getIsVisible()
    {
        return $this->is_visible;
    }

    /**
     * Set date_start
     *
     * @param \DateTime $dateStart
     * @return Asset
     */
    public function setDateStart($dateStart)
    {
        $this->date_start = $dateStart;

        return $this;
    }

    /**
     * Get date_start
     *
     * @return \DateTime 
     */
    public function getDateStart()
    {
        return $this->date_start;
    }

    /**
     * Set date_end
     *
     * @param \DateTime $dateEnd
     * @return Asset
     */
    public function setDateEnd($dateEnd)
    {
        $this->date_end = $dateEnd;

        return $this;
    }

    /**
     * Get date_end
     *
     * @return \DateTime 
     */
    public function getDateEnd()
    {
        return $this->date_end;
    }

    /**
     * Set created_at
     *
     * @param \DateTime $createdAt
     * @return Asset
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;

        return $this;
    }

    /**
     * Get created_at
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set updated_at
     *
     * @param \DateTime $updatedAt
     * @return Asset
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updated_at = $updatedAt;

        return $this;
    }

    /**
     * Get updated_at
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * Add categories
     *
     * @param \Cmais\ModelBundle\Entity\CategoryAsset $categories
     * @return Asset
     */
    public function addCategory(\Cmais\ModelBundle\Entity\CategoryAsset $categories)
    {
        $this->categories[] = $categories;

        return $this;
    }

    /**
     * Remove categories
     *
     * @param \Cmais\ModelBundle\Entity\CategoryAsset $categories
     */
    public function removeCategory(\Cmais\ModelBundle\Entity\CategoryAsset $categories)
    {
        $this->categories->removeElement($categories);
    }

    /**
     * Get categories
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Add sections
     *
     * @param \Cmais\ModelBundle\Entity\SectionAsset $sections
     * @return Asset
     */
    public function addSection(\Cmais\ModelBundle\Entity\SectionAsset $sections)
    {
        $this->sections[] = $sections;

        return $this;
    }

    /**
     * Remove sections
     *
     * @param \Cmais\ModelBundle\Entity\SectionAsset $sections
     */
    public function removeSection(\Cmais\ModelBundle\Entity\SectionAsset $sections)
    {
        $this->sections->removeElement($sections);
    }

    /**
     * Get sections
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSections()
    {
        return $this->sections;
    }

    /**
     * Set asset_type
     *
     * @param \Cmais\ModelBundle\Entity\AssetType $assetType
     * @return Asset
     */
    public function setAssetType(\Cmais\ModelBundle\Entity\AssetType $assetType = null)
    {
        $this->asset_type = $assetType;

        return $this;
    }

    /**
     * Get asset_type
     *
     * @return \Cmais\ModelBundle\Entity\AssetType 
     */
    public function getAssetType()
    {
        return $this->asset_type;
    }

    /**
     * Set site
     *
     * @param \Cmais\ModelBundle\Entity\Site $site
     * @return Asset
     */
    public function setSite(\Cmais\ModelBundle\Entity\Site $site = null)
    {
        $this->site = $site;

        return $this;
    }

    /**
     * Get site
     *
     * @return \Cmais\ModelBundle\Entity\Site 
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * Set category
     *
     * @param \Cmais\ModelBundle\Entity\Category $category
     * @return Asset
     */
    public function setCategory(\Cmais\ModelBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \Cmais\ModelBundle\Entity\Category 
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set user
     *
     * @param \Cmais\ModelBundle\Entity\User $user
     * @return Asset
     */
    public function setUser(\Cmais\ModelBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Cmais\ModelBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}
