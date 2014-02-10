<?php

namespace Cmais\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AssetSchedule
 */
class AssetSchedule
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $start_date;

    /**
     * @var \DateTime
     */
    private $end_date;

    /**
     * @var string
     */
    private $headline;

    /**
     * @var string
     */
    private $short_headline;

    /**
     * @var string
     */
    private $long_headline;

    /**
     * @var string
     */
    private $html;

    /**
     * @var string
     */
    private $source;

    /**
     * @var string
     */
    private $author;

    /**
     * @var boolean
     */
    private $is_active;

    /**
     * @var boolean
     */
    private $is_important;

    /**
     * @var boolean
     */
    private $is_live;

    /**
     * @var \Cmais\ModelBundle\Entity\Asset
     */
    private $asset;

    /**
     * @var \Cmais\ModelBundle\Entity\Site
     */
    private $channel;

    /**
     * @var \Cmais\ModelBundle\Entity\Site
     */
    private $program;


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
     * Set start_date
     *
     * @param \DateTime $startDate
     * @return AssetSchedule
     */
    public function setStartDate($startDate)
    {
        $this->start_date = $startDate;

        return $this;
    }

    /**
     * Get start_date
     *
     * @return \DateTime 
     */
    public function getStartDate()
    {
        return $this->start_date;
    }

    /**
     * Set end_date
     *
     * @param \DateTime $endDate
     * @return AssetSchedule
     */
    public function setEndDate($endDate)
    {
        $this->end_date = $endDate;

        return $this;
    }

    /**
     * Get end_date
     *
     * @return \DateTime 
     */
    public function getEndDate()
    {
        return $this->end_date;
    }

    /**
     * Set headline
     *
     * @param string $headline
     * @return AssetSchedule
     */
    public function setHeadline($headline)
    {
        $this->headline = $headline;

        return $this;
    }

    /**
     * Get headline
     *
     * @return string 
     */
    public function getHeadline()
    {
        return $this->headline;
    }

    /**
     * Set short_headline
     *
     * @param string $shortHeadline
     * @return AssetSchedule
     */
    public function setShortHeadline($shortHeadline)
    {
        $this->short_headline = $shortHeadline;

        return $this;
    }

    /**
     * Get short_headline
     *
     * @return string 
     */
    public function getShortHeadline()
    {
        return $this->short_headline;
    }

    /**
     * Set long_headline
     *
     * @param string $longHeadline
     * @return AssetSchedule
     */
    public function setLongHeadline($longHeadline)
    {
        $this->long_headline = $longHeadline;

        return $this;
    }

    /**
     * Get long_headline
     *
     * @return string 
     */
    public function getLongHeadline()
    {
        return $this->long_headline;
    }

    /**
     * Set html
     *
     * @param string $html
     * @return AssetSchedule
     */
    public function setHtml($html)
    {
        $this->html = $html;

        return $this;
    }

    /**
     * Get html
     *
     * @return string 
     */
    public function getHtml()
    {
        return $this->html;
    }

    /**
     * Set source
     *
     * @param string $source
     * @return AssetSchedule
     */
    public function setSource($source)
    {
        $this->source = $source;

        return $this;
    }

    /**
     * Get source
     *
     * @return string 
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Set author
     *
     * @param string $author
     * @return AssetSchedule
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return string 
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set is_active
     *
     * @param boolean $isActive
     * @return AssetSchedule
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
     * Set is_important
     *
     * @param boolean $isImportant
     * @return AssetSchedule
     */
    public function setIsImportant($isImportant)
    {
        $this->is_important = $isImportant;

        return $this;
    }

    /**
     * Get is_important
     *
     * @return boolean 
     */
    public function getIsImportant()
    {
        return $this->is_important;
    }

    /**
     * Set is_live
     *
     * @param boolean $isLive
     * @return AssetSchedule
     */
    public function setIsLive($isLive)
    {
        $this->is_live = $isLive;

        return $this;
    }

    /**
     * Get is_live
     *
     * @return boolean 
     */
    public function getIsLive()
    {
        return $this->is_live;
    }

    /**
     * Set asset
     *
     * @param \Cmais\ModelBundle\Entity\Asset $asset
     * @return AssetSchedule
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
     * Set channel
     *
     * @param \Cmais\ModelBundle\Entity\Site $channel
     * @return AssetSchedule
     */
    public function setChannel(\Cmais\ModelBundle\Entity\Site $channel = null)
    {
        $this->channel = $channel;

        return $this;
    }

    /**
     * Get channel
     *
     * @return \Cmais\ModelBundle\Entity\Site 
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * Set program
     *
     * @param \Cmais\ModelBundle\Entity\Site $program
     * @return AssetSchedule
     */
    public function setProgram(\Cmais\ModelBundle\Entity\Site $program = null)
    {
        $this->program = $program;

        return $this;
    }

    /**
     * Get program
     *
     * @return \Cmais\ModelBundle\Entity\Site 
     */
    public function getProgram()
    {
        return $this->program;
    }
}
