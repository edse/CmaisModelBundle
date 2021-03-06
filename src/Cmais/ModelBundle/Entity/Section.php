<?php

namespace Cmais\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Section
 */
class Section
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
    private $position;

    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $keywords;

    /**
     * @var string
     */
    private $contact_email;

    /**
     * @var boolean
     */
    private $is_homepage;

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
    private $assets;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $sections;

    /**
     * @var \Cmais\ModelBundle\Entity\Section
     */
    private $parent;

    /**
     * @var \Cmais\ModelBundle\Entity\Site
     */
    private $site;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->assets = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Section
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
     * @return Section
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
     * @return Section
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
     * Set position
     *
     * @param integer $position
     * @return Section
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
     * Set url
     *
     * @param string $url
     * @return Section
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
     * Set keywords
     *
     * @param string $keywords
     * @return Section
     */
    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;

        return $this;
    }

    /**
     * Get keywords
     *
     * @return string 
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * Set contact_email
     *
     * @param string $contactEmail
     * @return Section
     */
    public function setContactEmail($contactEmail)
    {
        $this->contact_email = $contactEmail;

        return $this;
    }

    /**
     * Get contact_email
     *
     * @return string 
     */
    public function getContactEmail()
    {
        return $this->contact_email;
    }

    /**
     * Set is_homepage
     *
     * @param boolean $isHomepage
     * @return Section
     */
    public function setIsHomepage($isHomepage)
    {
        $this->is_homepage = $isHomepage;

        return $this;
    }

    /**
     * Get is_homepage
     *
     * @return boolean 
     */
    public function getIsHomepage()
    {
        return $this->is_homepage;
    }

    /**
     * Set is_active
     *
     * @param boolean $isActive
     * @return Section
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
     * @return Section
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
     * @return Section
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
     * @return Section
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
     * @return Section
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
     * @return Section
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
     * Add assets
     *
     * @param \Cmais\ModelBundle\Entity\SectionAsset $assets
     * @return Section
     */
    public function addAsset(\Cmais\ModelBundle\Entity\SectionAsset $assets)
    {
        $this->assets[] = $assets;

        return $this;
    }

    /**
     * Remove assets
     *
     * @param \Cmais\ModelBundle\Entity\SectionAsset $assets
     */
    public function removeAsset(\Cmais\ModelBundle\Entity\SectionAsset $assets)
    {
        $this->assets->removeElement($assets);
    }

    /**
     * Get assets
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAssets()
    {
        return $this->assets;
    }

    /**
     * Add sections
     *
     * @param \Cmais\ModelBundle\Entity\Section $sections
     * @return Section
     */
    public function addSection(\Cmais\ModelBundle\Entity\Section $sections)
    {
        $this->sections[] = $sections;

        return $this;
    }

    /**
     * Remove sections
     *
     * @param \Cmais\ModelBundle\Entity\Section $sections
     */
    public function removeSection(\Cmais\ModelBundle\Entity\Section $sections)
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
     * Set parent
     *
     * @param \Cmais\ModelBundle\Entity\Section $parent
     * @return Section
     */
    public function setParent(\Cmais\ModelBundle\Entity\Section $parent = null)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return \Cmais\ModelBundle\Entity\Section 
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Set site
     *
     * @param \Cmais\ModelBundle\Entity\Site $site
     * @return Section
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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $blocks;


    /**
     * Add blocks
     *
     * @param \Cmais\ModelBundle\Entity\Block $blocks
     * @return Section
     */
    public function addBlock(\Cmais\ModelBundle\Entity\Block $blocks)
    {
        $this->blocks[] = $blocks;

        return $this;
    }

    /**
     * Remove blocks
     *
     * @param \Cmais\ModelBundle\Entity\Block $blocks
     */
    public function removeBlock(\Cmais\ModelBundle\Entity\Block $blocks)
    {
        $this->blocks->removeElement($blocks);
    }

    /**
     * Get blocks
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBlocks()
    {
        return $this->blocks;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $logs;


    /**
     * Add logs
     *
     * @param \Cmais\ModelBundle\Entity\Log $logs
     * @return Section
     */
    public function addLog(\Cmais\ModelBundle\Entity\Log $logs)
    {
        $this->logs[] = $logs;

        return $this;
    }

    /**
     * Remove logs
     *
     * @param \Cmais\ModelBundle\Entity\Log $logs
     */
    public function removeLog(\Cmais\ModelBundle\Entity\Log $logs)
    {
        $this->logs->removeElement($logs);
    }

    /**
     * Get logs
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLogs()
    {
        return $this->logs;
    }
}
