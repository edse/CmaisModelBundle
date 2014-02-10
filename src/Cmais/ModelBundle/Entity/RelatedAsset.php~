<?php

namespace Cmais\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RelatedAsset
 */
class RelatedAsset
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
     * @var \Cmais\ModelBundle\Entity\Asset
     */
    private $parent_asset;

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
     * @return RelatedAsset
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
     * @return RelatedAsset
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
     * @return RelatedAsset
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
     * Set parent_asset
     *
     * @param \Cmais\ModelBundle\Entity\Asset $parentAsset
     * @return RelatedAsset
     */
    public function setParentAsset(\Cmais\ModelBundle\Entity\Asset $parentAsset = null)
    {
        $this->parent_asset = $parentAsset;

        return $this;
    }

    /**
     * Get parent_asset
     *
     * @return \Cmais\ModelBundle\Entity\Asset 
     */
    public function getParentAsset()
    {
        return $this->parent_asset;
    }

    /**
     * Set asset
     *
     * @param \Cmais\ModelBundle\Entity\Asset $asset
     * @return RelatedAsset
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
    /**
     * @var \Cmais\ModelBundle\Entity\RelatedAssetType
     */
    private $related_asset_type;


    /**
     * Set related_asset_type
     *
     * @param \Cmais\ModelBundle\Entity\RelatedAssetType $relatedAssetType
     * @return RelatedAsset
     */
    public function setRelatedAssetType(\Cmais\ModelBundle\Entity\RelatedAssetType $relatedAssetType = null)
    {
        $this->related_asset_type = $relatedAssetType;

        return $this;
    }

    /**
     * Get related_asset_type
     *
     * @return \Cmais\ModelBundle\Entity\RelatedAssetType 
     */
    public function getRelatedAssetType()
    {
        return $this->related_asset_type;
    }
}
