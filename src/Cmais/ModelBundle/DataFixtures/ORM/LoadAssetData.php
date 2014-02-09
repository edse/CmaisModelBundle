<?php
namespace Cmais\ModelBundle\DataFixtures\ORM;
 
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Cmais\ModelBundle\Entity\Asset;
 
class LoadAssetData extends AbstractFixture implements OrderedFixtureInterface
{
  public function load(ObjectManager $em)
  {
    $asset_site1 = new Asset();
    //$asset_site1->setUserId(1);
    $asset_site1->setAssetType($em->merge($this->getReference('assetType-content')));
    $asset_site1->setSite($em->merge($this->getReference('site-1')));
    $asset_site1->setCategory($em->merge($this->getReference('category-programming')));
    $asset_site1->setTitle('Asset 1 (Site 1)');
    $asset_site1->setSlug('asset-11');
    $asset_site1->setDescription('Asset 1 description');
    $asset_site1->setIsActive(TRUE);

    $asset_site2 = new Asset();
    $asset_site2->setAssetType($em->merge($this->getReference('assetType-content')));
    //$asset_site2->setUser($em->merge($this->getReference('user-edse')));
    //$asset_site2->setUserId(1);
    $asset_site2->setSite($em->merge($this->getReference('site-2')));
    $asset_site2->setTitle('Asset 2 (Site 2)');
    $asset_site2->setSlug('asset-22');
    $asset_site2->setDescription('Asset 2 description');
    $asset_site2->setIsActive(TRUE);

    $asset_site3 = new Asset();
    $asset_site3->setAssetType($em->merge($this->getReference('assetType-content')));
    //$asset_site3->setUser($em->merge($this->getReference('user-edse')));
    //$asset_site3->setUserId(1);
    $asset_site3->setSite($em->merge($this->getReference('site-3')));
    $asset_site3->setTitle('Asset 3 (Site 3)');
    $asset_site3->setSlug('asset-33');
    $asset_site3->setDescription('Asset 3 description');
    $asset_site3->setIsActive(TRUE);
    
    $em->persist($asset_site1);
    $em->persist($asset_site2);
    $em->persist($asset_site3);
 
    $em->flush();
 
    $this->addReference('asset-1', $asset_site1);
    $this->addReference('asset-2', $asset_site2);
    $this->addReference('asset-3', $asset_site3);

  }
 
  public function getOrder()
  {
    return 7; // the order in which fixtures will be loaded
  }
}