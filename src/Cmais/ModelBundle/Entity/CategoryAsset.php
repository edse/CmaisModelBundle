<?php

namespace Cmais\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategoryAsset
 */
class CategoryAsset
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $position;

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
    private $created_at;

    /**
     * @var \DateTime
     */
    private $updated_at;

    /**
     * @var \Cmais\ModelBundle\Entity\Category
     */
    private $category;

    /**
     * @var \Cmais\ModelBundle\Entity\Asset
     */
    private $asset;


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
     * Set position
     *
     * @param integer $position
     * @return CategoryAsset
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return integer 
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set is_active
     *
     * @param boolean $isActive
     * @return CategoryAsset
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
     * @return CategoryAsset
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
     * Set created_at
     *
     * @param \DateTime $createdAt
     * @return CategoryAsset
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
     * @return CategoryAsset
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
     * Set category
     *
     * @param \Cmais\ModelBundle\Entity\Category $category
     * @return CategoryAsset
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
     * Set asset
     *
     * @param \Cmais\ModelBundle\Entity\Asset $asset
     * @return CategoryAsset
     */
    public function setAsset(\Cmais\ModelBundle\Entity\Asset $asset = null)
    {
        $this->asset = $asset;

        return $this;
    }

    /**
     * Get asset
     *
     * @return \Cmais\ModelBundle\Entity\Asset 
     */
    public function getAsset()
    {
        return $this->asset;
    }
}
