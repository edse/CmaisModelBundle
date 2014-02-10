<?php

namespace Cmais\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AssetPerson
 */
class AssetPerson
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $headline;

    /**
     * @var \DateTime
     */
    private $dob;

    /**
     * @var string
     */
    private $html;

    /**
     * @var string
     */
    private $website_url;

    /**
     * @var string
     */
    private $facebook_url;

    /**
     * @var string
     */
    private $twitter_url;

    /**
     * @var string
     */
    private $youtube_url;

    /**
     * @var string
     */
    private $googleplus_url;

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
     * Set name
     *
     * @param string $name
     * @return AssetPerson
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set headline
     *
     * @param string $headline
     * @return AssetPerson
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
     * Set dob
     *
     * @param \DateTime $dob
     * @return AssetPerson
     */
    public function setDob($dob)
    {
        $this->dob = $dob;

        return $this;
    }

    /**
     * Get dob
     *
     * @return \DateTime 
     */
    public function getDob()
    {
        return $this->dob;
    }

    /**
     * Set html
     *
     * @param string $html
     * @return AssetPerson
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
     * Set website_url
     *
     * @param string $websiteUrl
     * @return AssetPerson
     */
    public function setWebsiteUrl($websiteUrl)
    {
        $this->website_url = $websiteUrl;

        return $this;
    }

    /**
     * Get website_url
     *
     * @return string 
     */
    public function getWebsiteUrl()
    {
        return $this->website_url;
    }

    /**
     * Set facebook_url
     *
     * @param string $facebookUrl
     * @return AssetPerson
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
     * Set twitter_url
     *
     * @param string $twitterUrl
     * @return AssetPerson
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
     * Set youtube_url
     *
     * @param string $youtubeUrl
     * @return AssetPerson
     */
    public function setYoutubeUrl($youtubeUrl)
    {
        $this->youtube_url = $youtubeUrl;

        return $this;
    }

    /**
     * Get youtube_url
     *
     * @return string 
     */
    public function getYoutubeUrl()
    {
        return $this->youtube_url;
    }

    /**
     * Set googleplus_url
     *
     * @param string $googleplusUrl
     * @return AssetPerson
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
     * Set source
     *
     * @param string $source
     * @return AssetPerson
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
     * @return AssetPerson
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
     * @return AssetPerson
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
