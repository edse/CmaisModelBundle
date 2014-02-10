<?php

namespace Cmais\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SiteUser
 */
class SiteUser
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Cmais\ModelBundle\Entity\Site
     */
    private $site;

    /**
     * @var \Cmais\ModelBundle\Entity\User
     */
    private $user;


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
     * Set site
     *
     * @param \Cmais\ModelBundle\Entity\Site $site
     * @return SiteUser
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
     * Set user
     *
     * @param \Cmais\ModelBundle\Entity\User $user
     * @return SiteUser
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
}
