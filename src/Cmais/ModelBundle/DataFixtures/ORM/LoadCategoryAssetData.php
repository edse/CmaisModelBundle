<?php
namespace Cmais\ModelBundle\DataFixtures\ORM;
 
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Cmais\ModelBundle\Entity\CategoryAsset;
 
class LoadCategoryAssetData extends AbstractFixture implements OrderedFixtureInterface
{
  public function load(ObjectManager $em)
  {

    /*
    $album_song = new AlbumSong();
    $album_song->setAlbum($album);
    $album_song->setSong($song);
    $album_song->setExtraInfo("Extra Info to Sexy and I Know it. Only available on the album SorryForPartyRocking");
    */

    $category_asset = new CategoryAsset();
    $category_asset->setAsset($em->merge($this->getReference('asset-1')));
    $category_asset->setCategory($em->merge($this->getReference('category-programming')));

    $em->persist($category_asset);
 
    $em->flush();
  }
 
  public function getOrder()
  {
    return 8; // the order in which fixtures will be loaded
  }
}