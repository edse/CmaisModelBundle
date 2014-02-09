<?php
namespace Cmais\ModelBundle\DataFixtures\ORM;
 
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Cmais\ModelBundle\Entity\Category;
 
class LoadCategoryData extends AbstractFixture implements OrderedFixtureInterface
{
  public function load(ObjectManager $em)
  {
    $category_design = new Category();
    $category_design->setTitle('Design');
    $category_design->setSlug('design');
    $category_design->setIsActive(TRUE);
 
    $category_programming = new Category();
    $category_programming->setTitle('Programming');
    $category_programming->setSlug('programming');
    $category_programming->setIsActive(TRUE);
 
    $category_manager = new Category();
    $category_manager->setTitle('Manager');
    $category_manager->setSlug('Manager');
    $category_manager->setIsActive(TRUE);
 
    $category_administrator = new Category();
    $category_administrator->setTitle('Administrator');
    $category_administrator->setSlug('administrator');
    $category_administrator->setIsActive(TRUE);
 
    $em->persist($category_design);
    $em->persist($category_programming);
    $em->persist($category_manager);
    $em->persist($category_administrator);
 
    $em->flush();
 
    $this->addReference('category-design', $category_design);
    $this->addReference('category-programming', $category_programming);
    $this->addReference('category-manager', $category_manager);
    $this->addReference('category-administrator', $category_administrator);
  }
 
  public function getOrder()
  {
    return 1; // the order in which fixtures will be loaded
  }
}