<?php
namespace Cmais\ModelBundle\DataFixtures\ORM;
 
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Cmais\ModelBundle\Entity\Section;
 
class LoadSectionData extends AbstractFixture implements OrderedFixtureInterface
{
  public function load(ObjectManager $em)
  {
    $section_site1_home = new Section();
    $section_site1_home->setSite($em->merge($this->getReference('site-1')));
    $section_site1_home->setTitle('Home page (Site 1)');
    $section_site1_home->setSlug('home');
    $section_site1_home->setDescription('Home page description');
    $section_site1_home->setIsActive(TRUE);

    $section_site2_home = new Section();
    $section_site2_home->setSite($em->merge($this->getReference('site-2')));
    $section_site2_home->setTitle('Home page (Site 2)');
    $section_site2_home->setSlug('home');
    $section_site2_home->setDescription('Home page description');
    $section_site2_home->setIsActive(TRUE);

    $section_site3_home = new Section();
    $section_site3_home->setSite($em->merge($this->getReference('site-3')));
    $section_site3_home->setSlug('home');
    $section_site3_home->setTitle('Home page (Site 3)');
    $section_site3_home->setDescription('Home page description');
    $section_site3_home->setIsActive(TRUE);

    $em->persist($section_site1_home);
    $em->persist($section_site2_home);
    $em->persist($section_site3_home);
 
    $em->flush();
 
    $this->addReference('section-1', $section_site1_home);
    $this->addReference('section-2', $section_site2_home);
    $this->addReference('section-3', $section_site3_home);

  }
 
  public function getOrder()
  {
    return 5; // the order in which fixtures will be loaded
  }
}