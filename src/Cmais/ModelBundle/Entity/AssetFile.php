<?php

namespace Cmais\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AssetFile
 */
class AssetFile
{
    /**
     * @var integer
     */
    private $id;

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
     * Set file
     *
     * @param string $file
     * @return AssetFile
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
     * @return AssetFile
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
     * @return AssetFile
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
     * Set extension
     *
     * @param string $extension
     * @return AssetFile
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
     * @return AssetFile
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
     * @return AssetFile
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
     * @return AssetFile
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
     * @return AssetFile
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
     * Set asset
     *
     * @param \Cmais\ModelBundle\Entity\Asset $asset
     * @return AssetFile
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
