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
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $blocks;


    /**
     * Add blocks
     *
     * @param \Cmais\ModelBundle\Entity\Block $blocks
     * @return Asset
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
    private $displays;


    /**
     * Add displays
     *
     * @param \Cmais\ModelBundle\Entity\Display $displays
     * @return Asset
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
     * @var integer
     */
    private $position;


    /**
     * Set position
     *
     * @param integer $position
     * @return Asset
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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $parent_assets;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $related_assets;


    /**
     * Add parent_assets
     *
     * @param \Cmais\ModelBundle\Entity\RelatedAsset $parentAssets
     * @return Asset
     */
    public function addParentAsset(\Cmais\ModelBundle\Entity\RelatedAsset $parentAssets)
    {
        $this->parent_assets[] = $parentAssets;

        return $this;
    }

    /**
     * Remove parent_assets
     *
     * @param \Cmais\ModelBundle\Entity\RelatedAsset $parentAssets
     */
    public function removeParentAsset(\Cmais\ModelBundle\Entity\RelatedAsset $parentAssets)
    {
        $this->parent_assets->removeElement($parentAssets);
    }

    /**
     * Get parent_assets
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getParentAssets()
    {
        return $this->parent_assets;
    }

    /**
     * Add related_assets
     *
     * @param \Cmais\ModelBundle\Entity\RelatedAsset $relatedAssets
     * @return Asset
     */
    public function addRelatedAsset(\Cmais\ModelBundle\Entity\RelatedAsset $relatedAssets)
    {
        $this->related_assets[] = $relatedAssets;

        return $this;
    }

    /**
     * Remove related_assets
     *
     * @param \Cmais\ModelBundle\Entity\RelatedAsset $relatedAssets
     */
    public function removeRelatedAsset(\Cmais\ModelBundle\Entity\RelatedAsset $relatedAssets)
    {
        $this->related_assets->removeElement($relatedAssets);
    }

    /**
     * Get related_assets
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRelatedAssets()
    {
        return $this->related_assets;
    }
    /**
     * @var \Cmais\ModelBundle\Entity\AssetContent
     */
    private $asset_content;


    /**
     * Set asset_content
     *
     * @param \Cmais\ModelBundle\Entity\AssetContent $assetContent
     * @return Asset
     */
    public function setAssetContent(\Cmais\ModelBundle\Entity\AssetContent $assetContent = null)
    {
        $this->asset_content = $assetContent;

        return $this;
    }

    /**
     * Get asset_content
     *
     * @return \Cmais\ModelBundle\Entity\AssetContent 
     */
    public function getAssetContent()
    {
        return $this->asset_content;
    }
    /**
     * @var string
     */
    private $contact_email;

    /**
     * @var \Cmais\ModelBundle\Entity\AssetImage
     */
    private $asset_image;


    /**
     * Set contact_email
     *
     * @param string $contactEmail
     * @return Asset
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
     * Set asset_image
     *
     * @param \Cmais\ModelBundle\Entity\AssetImage $assetImage
     * @return Asset
     */
    public function setAssetImage(\Cmais\ModelBundle\Entity\AssetImage $assetImage = null)
    {
        $this->asset_image = $assetImage;

        return $this;
    }

    /**
     * Get asset_image
     *
     * @return \Cmais\ModelBundle\Entity\AssetImage 
     */
    public function getAssetImage()
    {
        return $this->asset_image;
    }
    /**
     * @var \Cmais\ModelBundle\Entity\AssetVideo
     */
    private $asset_video;


    /**
     * Set asset_video
     *
     * @param \Cmais\ModelBundle\Entity\AssetVideo $assetVideo
     * @return Asset
     */
    public function setAssetVideo(\Cmais\ModelBundle\Entity\AssetVideo $assetVideo = null)
    {
        $this->asset_video = $assetVideo;

        return $this;
    }

    /**
     * Get asset_video
     *
     * @return \Cmais\ModelBundle\Entity\AssetVideo 
     */
    public function getAssetVideo()
    {
        return $this->asset_video;
    }
    /**
     * @var \Cmais\ModelBundle\Entity\AssetAudio
     */
    private $asset_audio;


    /**
     * Set asset_audio
     *
     * @param \Cmais\ModelBundle\Entity\AssetAudio $assetAudio
     * @return Asset
     */
    public function setAssetAudio(\Cmais\ModelBundle\Entity\AssetAudio $assetAudio = null)
    {
        $this->asset_audio = $assetAudio;

        return $this;
    }

    /**
     * Get asset_audio
     *
     * @return \Cmais\ModelBundle\Entity\AssetAudio 
     */
    public function getAssetAudio()
    {
        return $this->asset_audio;
    }
    /**
     * @var \Cmais\ModelBundle\Entity\AssetFile
     */
    private $asset_file;

    /**
     * @var \Cmais\ModelBundle\Entity\AssetImageGallery
     */
    private $asset_image_gallery;

    /**
     * @var \Cmais\ModelBundle\Entity\AssetAudioGallery
     */
    private $asset_audio_gallery;

    /**
     * @var \Cmais\ModelBundle\Entity\AssetVideoGallery
     */
    private $asset_video_gallery;


    /**
     * Set asset_file
     *
     * @param \Cmais\ModelBundle\Entity\AssetFile $assetFile
     * @return Asset
     */
    public function setAssetFile(\Cmais\ModelBundle\Entity\AssetFile $assetFile = null)
    {
        $this->asset_file = $assetFile;

        return $this;
    }

    /**
     * Get asset_file
     *
     * @return \Cmais\ModelBundle\Entity\AssetFile 
     */
    public function getAssetFile()
    {
        return $this->asset_file;
    }

    /**
     * Set asset_image_gallery
     *
     * @param \Cmais\ModelBundle\Entity\AssetImageGallery $assetImageGallery
     * @return Asset
     */
    public function setAssetImageGallery(\Cmais\ModelBundle\Entity\AssetImageGallery $assetImageGallery = null)
    {
        $this->asset_image_gallery = $assetImageGallery;

        return $this;
    }

    /**
     * Get asset_image_gallery
     *
     * @return \Cmais\ModelBundle\Entity\AssetImageGallery 
     */
    public function getAssetImageGallery()
    {
        return $this->asset_image_gallery;
    }

    /**
     * Set asset_audio_gallery
     *
     * @param \Cmais\ModelBundle\Entity\AssetAudioGallery $assetAudioGallery
     * @return Asset
     */
    public function setAssetAudioGallery(\Cmais\ModelBundle\Entity\AssetAudioGallery $assetAudioGallery = null)
    {
        $this->asset_audio_gallery = $assetAudioGallery;

        return $this;
    }

    /**
     * Get asset_audio_gallery
     *
     * @return \Cmais\ModelBundle\Entity\AssetAudioGallery 
     */
    public function getAssetAudioGallery()
    {
        return $this->asset_audio_gallery;
    }

    /**
     * Set asset_video_gallery
     *
     * @param \Cmais\ModelBundle\Entity\AssetVideoGallery $assetVideoGallery
     * @return Asset
     */
    public function setAssetVideoGallery(\Cmais\ModelBundle\Entity\AssetVideoGallery $assetVideoGallery = null)
    {
        $this->asset_video_gallery = $assetVideoGallery;

        return $this;
    }

    /**
     * Get asset_video_gallery
     *
     * @return \Cmais\ModelBundle\Entity\AssetVideoGallery 
     */
    public function getAssetVideoGallery()
    {
        return $this->asset_video_gallery;
    }
    /**
     * @var \Cmais\ModelBundle\Entity\AssetQuestion
     */
    private $asset_question;


    /**
     * Set asset_question
     *
     * @param \Cmais\ModelBundle\Entity\AssetQuestion $assetQuestion
     * @return Asset
     */
    public function setAssetQuestion(\Cmais\ModelBundle\Entity\AssetQuestion $assetQuestion = null)
    {
        $this->asset_question = $assetQuestion;

        return $this;
    }

    /**
     * Get asset_question
     *
     * @return \Cmais\ModelBundle\Entity\AssetQuestion 
     */
    public function getAssetQuestion()
    {
        return $this->asset_question;
    }
    /**
     * @var \Cmais\ModelBundle\Entity\AssetAnswer
     */
    private $asset_answer;


    /**
     * Set asset_answer
     *
     * @param \Cmais\ModelBundle\Entity\AssetAnswer $assetAnswer
     * @return Asset
     */
    public function setAssetAnswer(\Cmais\ModelBundle\Entity\AssetAnswer $assetAnswer = null)
    {
        $this->asset_answer = $assetAnswer;

        return $this;
    }

    /**
     * Get asset_answer
     *
     * @return \Cmais\ModelBundle\Entity\AssetAnswer 
     */
    public function getAssetAnswer()
    {
        return $this->asset_answer;
    }
    /**
     * @var \Cmais\ModelBundle\Entity\AssetPerson
     */
    private $asset_person;


    /**
     * Set asset_person
     *
     * @param \Cmais\ModelBundle\Entity\AssetPerson $assetPerson
     * @return Asset
     */
    public function setAssetPerson(\Cmais\ModelBundle\Entity\AssetPerson $assetPerson = null)
    {
        $this->asset_person = $assetPerson;

        return $this;
    }

    /**
     * Get asset_person
     *
     * @return \Cmais\ModelBundle\Entity\AssetPerson 
     */
    public function getAssetPerson()
    {
        return $this->asset_person;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $logs;


    /**
     * Add logs
     *
     * @param \Cmais\ModelBundle\Entity\Log $logs
     * @return Asset
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
    /**
     * @var \Cmais\ModelBundle\Entity\AssetSchedule
     */
    private $asset_schedule;


    /**
     * Set asset_schedule
     *
     * @param \Cmais\ModelBundle\Entity\AssetSchedule $assetSchedule
     * @return Asset
     */
    public function setAssetSchedule(\Cmais\ModelBundle\Entity\AssetSchedule $assetSchedule = null)
    {
        $this->asset_schedule = $assetSchedule;

        return $this;
    }

    /**
     * Get asset_schedule
     *
     * @return \Cmais\ModelBundle\Entity\AssetSchedule 
     */
    public function getAssetSchedule()
    {
        return $this->asset_schedule;
    }
}
