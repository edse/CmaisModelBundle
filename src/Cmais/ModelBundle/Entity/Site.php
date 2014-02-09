<?php

namespace Cmais\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Site
 */
class Site
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
    private $url;

    /**
     * @var string
     */
    private $keywords;

    /**
     * @var string
     */
    private $youtube_channel;

    /**
     * @var string
     */
    private $youtube_genre;

    /**
     * @var string
     */
    private $twitter_account;

    /**
     * @var string
     */
    private $twitter_url;

    /**
     * @var string
     */
    private $facebook_account;

    /**
     * @var string
     */
    private $facebook_url;

    /**
     * @var string
     */
    private $googleplus_account;

    /**
     * @var string
     */
    private $googleplus_url;

    /**
     * @var string
     */
    private $image_icon;

    /**
     * @var string
     */
    private $image_thumb;

    /**
     * @var string
     */
    private $image_live;

    /**
     * @var string
     */
    private $contact_email;

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
    private $sections;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $assets;

    /**
     * @var \Cmais\ModelBundle\Entity\SiteType
     */
    private $site_type;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->sections = new \Doctrine\Common\Collections\ArrayCollection();
        $this->assets = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Site
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
     * @return Site
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
     * @return Site
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
     * Set url
     *
     * @param string $url
     * @return Site
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
     * @return Site
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
     * Set youtube_channel
     *
     * @param string $youtubeChannel
     * @return Site
     */
    public function setYoutubeChannel($youtubeChannel)
    {
        $this->youtube_channel = $youtubeChannel;

        return $this;
    }

    /**
     * Get youtube_channel
     *
     * @return string 
     */
    public function getYoutubeChannel()
    {
        return $this->youtube_channel;
    }

    /**
     * Set youtube_genre
     *
     * @param string $youtubeGenre
     * @return Site
     */
    public function setYoutubeGenre($youtubeGenre)
    {
        $this->youtube_genre = $youtubeGenre;

        return $this;
    }

    /**
     * Get youtube_genre
     *
     * @return string 
     */
    public function getYoutubeGenre()
    {
        return $this->youtube_genre;
    }

    /**
     * Set twitter_account
     *
     * @param string $twitterAccount
     * @return Site
     */
    public function setTwitterAccount($twitterAccount)
    {
        $this->twitter_account = $twitterAccount;

        return $this;
    }

    /**
     * Get twitter_account
     *
     * @return string 
     */
    public function getTwitterAccount()
    {
        return $this->twitter_account;
    }

    /**
     * Set twitter_url
     *
     * @param string $twitterUrl
     * @return Site
     */
    public function setTwitterUrl($twitterUrl)
    {
        $this->twitter_url = $twitterUrl;

        return $this;
    }

    /**
     * Get twitter_url
     *
     * @return string 
     */
    public function getTwitterUrl()
    {
        return $this->twitter_url;
    }

    /**
     * Set facebook_account
     *
     * @param string $facebookAccount
     * @return Site
     */
    public function setFacebookAccount($facebookAccount)
    {
        $this->facebook_account = $facebookAccount;

        return $this;
    }

    /**
     * Get facebook_account
     *
     * @return string 
     */
    public function getFacebookAccount()
    {
        return $this->facebook_account;
    }

    /**
     * Set facebook_url
     *
     * @param string $facebookUrl
     * @return Site
     */
    public function setFacebookUrl($facebookUrl)
    {
        $this->facebook_url = $facebookUrl;

        return $this;
    }

    /**
     * Get facebook_url
     *
     * @return string 
     */
    public function getFacebookUrl()
    {
        return $this->facebook_url;
    }

    /**
     * Set googleplus_account
     *
     * @param string $googleplusAccount
     * @return Site
     */
    public function setGoogleplusAccount($googleplusAccount)
    {
        $this->googleplus_account = $googleplusAccount;

        return $this;
    }

    /**
     * Get googleplus_account
     *
     * @return string 
     */
    public function getGoogleplusAccount()
    {
        return $this->googleplus_account;
    }

    /**
     * Set googleplus_url
     *
     * @param string $googleplusUrl
     * @return Site
     */
    public function setGoogleplusUrl($googleplusUrl)
    {
        $this->googleplus_url = $googleplusUrl;

        return $this;
    }

    /**
     * Get googleplus_url
     *
     * @return string 
     */
    public function getGoogleplusUrl()
    {
        return $this->googleplus_url;
    }

    /**
     * Set image_icon
     *
     * @param string $imageIcon
     * @return Site
     */
    public function setImageIcon($imageIcon)
    {
        $this->image_icon = $imageIcon;

        return $this;
    }

    /**
     * Get image_icon
     *
     * @return string 
     */
    public function getImageIcon()
    {
        return $this->image_icon;
    }

    /**
     * Set image_thumb
     *
     * @param string $imageThumb
     * @return Site
     */
    public function setImageThumb($imageThumb)
    {
        $this->image_thumb = $imageThumb;

        return $this;
    }

    /**
     * Get image_thumb
     *
     * @return string 
     */
    public function getImageThumb()
    {
        return $this->image_thumb;
    }

    /**
     * Set image_live
     *
     * @param string $imageLive
     * @return Site
     */
    public function setImageLive($imageLive)
    {
        $this->image_live = $imageLive;

        return $this;
    }

    /**
     * Get image_live
     *
     * @return string 
     */
    public function getImageLive()
    {
        return $this->image_live;
    }

    /**
     * Set contact_email
     *
     * @param string $contactEmail
     * @return Site
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
     * Set display_order
     *
     * @param integer $displayOrder
     * @return Site
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
     * @return Site
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
     * @return Site
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
     * @return Site
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
     * @return Site
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
     * @return Site
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
     * @return Site
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
     * Add sections
     *
     * @param \Cmais\ModelBundle\Entity\Section $sections
     * @return Site
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
     * Add assets
     *
     * @param \Cmais\ModelBundle\Entity\Asset $assets
     * @return Site
     */
    public function addAsset(\Cmais\ModelBundle\Entity\Asset $assets)
    {
        $this->assets[] = $assets;

        return $this;
    }

    /**
     * Remove assets
     *
     * @param \Cmais\ModelBundle\Entity\Asset $assets
     */
    public function removeAsset(\Cmais\ModelBundle\Entity\Asset $assets)
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
     * Set site_type
     *
     * @param \Cmais\ModelBundle\Entity\SiteType $siteType
     * @return Site
     */
    public function setSiteType(\Cmais\ModelBundle\Entity\SiteType $siteType = null)
    {
        $this->site_type = $siteType;

        return $this;
    }

    /**
     * Get site_type
     *
     * @return \Cmais\ModelBundle\Entity\SiteType 
     */
    public function getSiteType()
    {
        return $this->site_type;
    }
}
