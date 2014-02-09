<?php
namespace Cmais\ModelBundle\DataFixtures\ORM;
 
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Cmais\ModelBundle\Entity\Site;
 
class LoadSiteData extends AbstractFixture implements OrderedFixtureInterface
{
  public function load(ObjectManager $em)
  {
    $siteType_canal = new Site();
    $siteType_canal->setSiteType($em->merge($this->getReference('siteType-canal')));
    $siteType_canal->setTitle('Site 1');
    $siteType_canal->setSlug('site-1');
    $siteType_canal->setDescription('Site 1 description');
    $siteType_canal->setIsActive(TRUE);
 
    $siteType_programa = new Site();
    $siteType_programa->setSiteType($em->merge($this->getReference('siteType-programa')));
    $siteType_programa->setTitle('Site 2');
    $siteType_programa->setSlug('site-2');
    $siteType_programa->setDescription('Site 2 description');
    $siteType_programa->setIsActive(TRUE);
 
    $siteType_hotsite = new Site();
    $siteType_hotsite->setSiteType($em->merge($this->getReference('siteType-hotsite')));
    $siteType_hotsite->setTitle('Site 3');
    $siteType_hotsite->setSlug('site-3');
    $siteType_hotsite->setDescription('Site 3 description');
    $siteType_hotsite->setIsActive(TRUE);

    $em->persist($siteType_canal);
    $em->persist($siteType_programa);
    $em->persist($siteType_hotsite);
 
    $em->flush();
 
    $this->addReference('site-1', $siteType_canal);
    $this->addReference('site-2', $siteType_programa);
    $this->addReference('site-3', $siteType_hotsite);

  }
 
  public function getOrder()
  {
    return 4; // the order in which fixtures will be loaded
  }
}