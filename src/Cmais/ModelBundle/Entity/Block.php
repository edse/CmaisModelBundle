<?php

namespace Cmais\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Block
 */
class Block
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
     * @var string
     */
    private $query;

    /**
     * @var integer
     */
    private $items;

    /**
     * @var integer
     */
    private $items_order;

    /**
     * @var integer
     */
    private $position;

    /**
     * @var boolean
     */
    private $is_random;

    /**
     * @var boolean
     */
    private $is_automatic;

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
     * @var \Cmais\ModelBundle\Entity\Section
     */
    private $section;


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
     * @return Block
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
     * @return Block
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
     * @return Block
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
     * Set query
     *
     * @param string $query
     * @return Block
     */
    public function setQuery($query)
    {
        $this->query = $query;

        return $this;
    }

    /**
     * Get query
     *
     * @return string 
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * Set items
     *
     * @param integer $items
     * @return Block
     */
    public function setItems($items)
    {
        $this->items = $items;

        return $this;
    }

    /**
     * Get items
     *
     * @return integer 
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * Set items_order
     *
     * @param integer $itemsOrder
     * @return Block
     */
    public function setItemsOrder($itemsOrder)
    {
        $this->items_order = $itemsOrder;

        return $this;
    }

    /**
     * Get items_order
     *
     * @return integer 
     */
    public function getItemsOrder()
    {
        return $this->items_order;
    }

    /**
     * Set position
     *
     * @param integer $position
     * @return Block
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
     * Set is_random
     *
     * @param boolean $isRandom
     * @return Block
     */
    public function setIsRandom($isRandom)
    {
        $this->is_random = $isRandom;

        return $this;
    }

    /**
     * Get is_random
     *
     * @return boolean 
     */
    public function getIsRandom()
    {
        return $this->is_random;
    }

    /**
     * Set is_automatic
     *
     * @param boolean $isAutomatic
     * @return Block
     */
    public function setIsAutomatic($isAutomatic)
    {
        $this->is_automatic = $isAutomatic;

        return $this;
    }

    /**
     * Get is_automatic
     *
     * @return boolean 
     */
    public function getIsAutomatic()
    {
        return $this->is_automatic;
    }

    /**
     * Set is_active
     *
     * @param boolean $isActive
     * @return Block
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
     * @return Block
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
     * @return Block
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
     * @return Block
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
     * @return Block
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
     * @return Block
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
     * Set section
     *
     * @param \Cmais\ModelBundle\Entity\Section $section
     * @return Block
     */
    public function setSection(\Cmais\ModelBundle\Entity\Section $section = null)
    {
        $this->section = $section;

        return $this;
    }

    /**
     * Get section
     *
     * @return \Cmais\ModelBundle\Entity\Section 
     */
    public function getSection()
    {
        return $this->section;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $displays;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->displays = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add displays
     *
     * @param \Cmais\ModelBundle\Entity\Display $displays
     * @return Block
     */
    public function addDisplay(\Cmais\ModelBundle\Entity\Display $displays)
    {
        $this->displays[] = $displays;

        return $this;
    }

    /**
     * Remove displays
     *
     * @param \Cmais\ModelBundle\Entity\Display $displays
     */
    public function removeDisplay(\Cmais\ModelBundle\Entity\Display $displays)
    {
        $this->displays->removeElement($displays);
    }

    /**
     * Get displays
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDisplays()
    {
        return $this->displays;
    }
    /**
     * @var \Cmais\ModelBundle\Entity\Asset
     */
    private $asset;


    /**
     * Set asset
     *
     * @param \Cmais\ModelBundle\Entity\Asset $asset
     * @return Block
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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $logs;


    /**
     * Add logs
     *
     * @param \Cmais\ModelBundle\Entity\Log $logs
     * @return Block
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
