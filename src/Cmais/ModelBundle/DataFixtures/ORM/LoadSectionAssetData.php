<?php
namespace Cmais\ModelBundle\DataFixtures\ORM;
 
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Cmais\ModelBundle\Entity\SectionAsset;
 
class LoadSectionAssetData extends AbstractFixture implements OrderedFixtureInterface
{
  public function load(ObjectManager $em)
  {

    $section_asset = new SectionAsset();
    $section_asset->setAsset($em->merge($this->getReference('asset-1')));
    $section_asset->setSection($em->merge($this->getReference('section-1')));

    $em->persist($section_asset);
 
    $em->flush();
  }
 
  public function getOrder()
  {
    return 9; // the order in which fixtures will be loaded
  }
}