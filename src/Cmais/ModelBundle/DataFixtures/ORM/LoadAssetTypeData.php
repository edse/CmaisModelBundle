<?php
namespace Cmais\ModelBundle\DataFixtures\ORM;
 
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Cmais\ModelBundle\Entity\AssetType;
 
class LoadAssetTypeData extends AbstractFixture implements OrderedFixtureInterface
{
  public function load(ObjectManager $em)
  {
    $assetType_content = new AssetType();
    $assetType_content->setTitle('Content');
    $assetType_content->setSlug('content');
    $assetType_content->setDescription('Content type description');
    $assetType_content->setIsUploadable(FALSE);
    $assetType_content->setIsActive(TRUE);
 
    $assetType_image = new AssetType();
    $assetType_image->setTitle('Image');
    $assetType_image->setSlug('image');
    $assetType_image->setDescription('Image type description');
    $assetType_image->setIsUploadable(TRUE);
    $assetType_image->setIsActive(TRUE);
 
    $assetType_video = new AssetType();
    $assetType_video->setTitle('Video');
    $assetType_video->setSlug('video');
    $assetType_video->setDescription('VIdeo type description');
    $assetType_video->setIsUploadable(TRUE);
    $assetType_video->setIsActive(TRUE);

    $em->persist($assetType_content);
    $em->persist($assetType_image);
    $em->persist($assetType_video);
 
    $em->flush();
 
    $this->addReference('assetType-content', $assetType_content);
    $this->addReference('assetType-image', $assetType_image);
    $this->addReference('assetType-video', $assetType_video);

  }
 
  public function getOrder()
  {
    return 2; // the order in which fixtures will be loaded
  }
}