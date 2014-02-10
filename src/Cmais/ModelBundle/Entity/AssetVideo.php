<?php

namespace Cmais\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AssetVideo
 */
class AssetVideo
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $youtube_id;

    /**
     * @var string
     */
    private $youtube_thumb;

    /**
     * @var string
     */
    private $file;

    /**
     * @var string
     */
    private $original_file;

    /**
     * @var string
     */
    private $original_file_size;

    /**
     * @var string
     */
    private $framerate;

    /**
     * @var string
     */
    private $bitrate;

    /**
     * @var string
     */
    private $duration;

    /**
     * @var string
     */
    private $width;

    /**
     * @var string
     */
    private $height;

    /**
     * @var string
     */
    private $extension;

    /**
     * @var string
     */
    private $headline;

    /**
     * @var string
     */
    private $genre;

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
     * Set youtube_id
     *
     * @param string $youtubeId
     * @return AssetVideo
     */
    public function setYoutubeId($youtubeId)
    {
        $this->youtube_id = $youtubeId;

        return $this;
    }

    /**
     * Get youtube_id
     *
     * @return string 
     */
    public function getYoutubeId()
    {
        return $this->youtube_id;
    }

    /**
     * Set youtube_thumb
     *
     * @param string $youtubeThumb
     * @return AssetVideo
     */
    public function setYoutubeThumb($youtubeThumb)
    {
        $this->youtube_thumb = $youtubeThumb;

        return $this;
    }

    /**
     * Get youtube_thumb
     *
     * @return string 
     */
    public function getYoutubeThumb()
    {
        return $this->youtube_thumb;
    }

    /**
     * Set file
     *
     * @param string $file
     * @return AssetVideo
     */
    public function setFile($file)
    {
        $this->file = $file;

        return $this;
    }

    /**
     * Get file
     *
     * @return string 
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Set original_file
     *
     * @param string $originalFile
     * @return AssetVideo
     */
    public function setOriginalFile($originalFile)
    {
        $this->original_file = $originalFile;

        return $this;
    }

    /**
     * Get original_file
     *
     * @return string 
     */
    public function getOriginalFile()
    {
        return $this->original_file;
    }

    /**
     * Set original_file_size
     *
     * @param string $originalFileSize
     * @return AssetVideo
     */
    public function setOriginalFileSize($originalFileSize)
    {
        $this->original_file_size = $originalFileSize;

        return $this;
    }

    /**
     * Get original_file_size
     *
     * @return string 
     */
    public function getOriginalFileSize()
    {
        return $this->original_file_size;
    }

    /**
     * Set framerate
     *
     * @param string $framerate
     * @return AssetVideo
     */
    public function setFramerate($framerate)
    {
        $this->framerate = $framerate;

        return $this;
    }

    /**
     * Get framerate
     *
     * @return string 
     */
    public function getFramerate()
    {
        return $this->framerate;
    }

    /**
     * Set bitrate
     *
     * @param string $bitrate
     * @return AssetVideo
     */
    public function setBitrate($bitrate)
    {
        $this->bitrate = $bitrate;

        return $this;
    }

    /**
     * Get bitrate
     *
     * @return string 
     */
    public function getBitrate()
    {
        return $this->bitrate;
    }

    /**
     * Set duration
     *
     * @param string $duration
     * @return AssetVideo
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get duration
     *
     * @return string 
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set width
     *
     * @param string $width
     * @return AssetVideo
     */
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Get width
     *
     * @return string 
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Set height
     *
     * @param string $height
     * @return AssetVideo
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get height
     *
     * @return string 
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set extension
     *
     * @param string $extension
     * @return AssetVideo
     */
    public function setExtension($extension)
    {
        $this->extension = $extension;

        return $this;
    }

    /**
     * Get extension
     *
     * @return string 
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * Set headline
     *
     * @param string $headline
     * @return AssetVideo
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
     * Set genre
     *
     * @param string $genre
     * @return AssetVideo
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * Get genre
     *
     * @return string 
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Set source
     *
     * @param string $source
     * @return AssetVideo
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
     * @return AssetVideo
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
     * @return AssetVideo
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
     * @return AssetVideo
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
     * @return AssetVideo
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
     * @return AssetVideo
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
     * Set asset
     *
     * @param \Cmais\ModelBundle\Entity\Asset $asset
     * @return AssetVideo
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
    private $video_dropboxes;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->video_dropboxes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add video_dropboxes
     *
     * @param \Cmais\ModelBundle\Entity\VideoDropbox $videoDropboxes
     * @return AssetVideo
     */
    public function addVideoDropbox(\Cmais\ModelBundle\Entity\VideoDropbox $videoDropboxes)
    {
        $this->video_dropboxes[] = $videoDropboxes;

        return $this;
    }

    /**
     * Remove video_dropboxes
     *
     * @param \Cmais\ModelBundle\Entity\VideoDropbox $videoDropboxes
     */
    public function removeVideoDropbox(\Cmais\ModelBundle\Entity\VideoDropbox $videoDropboxes)
    {
        $this->video_dropboxes->removeElement($videoDropboxes);
    }

    /**
     * Get video_dropboxes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getVideoDropboxes()
    {
        return $this->video_dropboxes;
    }
}
