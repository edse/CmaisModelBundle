<?php

namespace Cmais\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RelatedSite
 */
class RelatedSite
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
     * @var \Cmais\ModelBundle\Entity\Site
     */
    private $parent_site;

    /**
     * @var \Cmais\ModelBundle\Entity\Site
     */
    private $site;

    /**
     * @var \Cmais\ModelBundle\Entity\RelatedSiteType
     */
    private $related_site_type;


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
     * @return RelatedSite
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
     * @return RelatedSite
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
     * @return RelatedSite
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
     * Set parent_site
     *
     * @param \Cmais\ModelBundle\Entity\Site $parentSite
     * @return RelatedSite
     */
    public function setParentSite(\Cmais\ModelBundle\Entity\Site $parentSite = null)
    {
        $this->parent_site = $parentSite;

        return $this;
    }

    /**
     * Get parent_site
     *
     * @return \Cmais\ModelBundle\Entity\Site 
     */
    public function getParentSite()
    {
        return $this->parent_site;
    }

    /**
     * Set site
     *
     * @param \Cmais\ModelBundle\Entity\Site $site
     * @return RelatedSite
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
     * Set related_site_type
     *
     * @param \Cmais\ModelBundle\Entity\RelatedSiteType $relatedSiteType
     * @return RelatedSite
     */
    public function setRelatedSiteType(\Cmais\ModelBundle\Entity\RelatedSiteType $relatedSiteType = null)
    {
        $this->related_site_type = $relatedSiteType;

        return $this;
    }

    /**
     * Get related_site_type
     *
     * @return \Cmais\ModelBundle\Entity\RelatedSiteType 
     */
    public function getRelatedSiteType()
    {
        return $this->related_site_type;
    }
}
