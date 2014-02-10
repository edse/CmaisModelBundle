<?php

namespace Cmais\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AssetQuestion
 */
class AssetQuestion
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $question;

    /**
     * @var string
     */
    private $headline;

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
     * @var \Cmais\ModelBundle\Entity\Asset
     */
    private $asset;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $asset_answers;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->asset_answers = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set question
     *
     * @param string $question
     * @return AssetQuestion
     */
    public function setQuestion($question)
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Get question
     *
     * @return string 
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * Set headline
     *
     * @param string $headline
     * @return AssetQuestion
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
     * Set html
     *
     * @param string $html
     * @return AssetQuestion
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
     * @return AssetQuestion
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
     * @return AssetQuestion
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
     * @return AssetQuestion
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
     * Add asset_answers
     *
     * @param \Cmais\ModelBundle\Entity\AssetAnswer $assetAnswers
     * @return AssetQuestion
     */
    public function addAssetAnswer(\Cmais\ModelBundle\Entity\AssetAnswer $assetAnswers)
    {
        $this->asset_answers[] = $assetAnswers;

        return $this;
    }

    /**
     * Remove asset_answers
     *
     * @param \Cmais\ModelBundle\Entity\AssetAnswer $assetAnswers
     */
    public function removeAssetAnswer(\Cmais\ModelBundle\Entity\AssetAnswer $assetAnswers)
    {
        $this->asset_answers->removeElement($assetAnswers);
    }

    /**
     * Get asset_answers
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAssetAnswers()
    {
        return $this->asset_answers;
    }
}
