<?php

namespace Cmais\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AssetAnswer
 */
class AssetAnswer
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $answer;

    /**
     * @var integer
     */
    private $votes;

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
     * @var \Cmais\ModelBundle\Entity\AssetQuestion
     */
    private $asset_question;


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
     * Set answer
     *
     * @param string $answer
     * @return AssetAnswer
     */
    public function setAnswer($answer)
    {
        $this->answer = $answer;

        return $this;
    }

    /**
     * Get answer
     *
     * @return string 
     */
    public function getAnswer()
    {
        return $this->answer;
    }

    /**
     * Set votes
     *
     * @param integer $votes
     * @return AssetAnswer
     */
    public function setVotes($votes)
    {
        $this->votes = $votes;

        return $this;
    }

    /**
     * Get votes
     *
     * @return integer 
     */
    public function getVotes()
    {
        return $this->votes;
    }

    /**
     * Set headline
     *
     * @param string $headline
     * @return AssetAnswer
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
     * @return AssetAnswer
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
     * @return AssetAnswer
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
     * @return AssetAnswer
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
     * @return AssetAnswer
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
     * Set asset_question
     *
     * @param \Cmais\ModelBundle\Entity\AssetQuestion $assetQuestion
     * @return AssetAnswer
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
}
