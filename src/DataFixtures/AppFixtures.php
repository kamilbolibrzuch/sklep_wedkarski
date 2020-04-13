<?php

namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        $product= new Product();
        $product
              
              ->setName('Klawiatura')
              ->setPrice('11111')
              ->setDescription('działa');
        $manager->persist($product);
        $manager->flush();

    }
}
