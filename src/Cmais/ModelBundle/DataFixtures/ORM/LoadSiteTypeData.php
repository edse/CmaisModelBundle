<?php
namespace Cmais\ModelBundle\DataFixtures\ORM;
 
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Cmais\ModelBundle\Entity\SiteType;
 
class LoadSiteTypeData extends AbstractFixture implements OrderedFixtureInterface
{
  public function load(ObjectManager $em)
  {
    $siteType_canal = new SiteType();
    $siteType_canal->setTitle('Channel');
    $siteType_canal->setSlug('channel');
    $siteType_canal->setDescription('Channel site type description');
    $siteType_canal->setIsActive(TRUE);
 
    $siteType_programa = new SiteType();
    $siteType_programa->setTitle('Show');
    $siteType_programa->setSlug('show');
    $siteType_programa->setDescription('Show site type description');
    $siteType_programa->setIsActive(TRUE);
 
    $siteType_hotsite = new SiteType();
    $siteType_hotsite->setTitle('Hotsite');
    $siteType_hotsite->setSlug('hotsite');
    $siteType_hotsite->setDescription('Hotsite site type description');
    $siteType_hotsite->setIsActive(TRUE);

    $em->persist($siteType_canal);
    $em->persist($siteType_programa);
    $em->persist($siteType_hotsite);
 
    $em->flush();
 
    $this->addReference('siteType-canal', $siteType_canal);
    $this->addReference('siteType-programa', $siteType_programa);
    $this->addReference('siteType-hotsite', $siteType_hotsite);

  }
 
  public function getOrder()
  {
    return 3; // the order in which fixtures will be loaded
  }
}