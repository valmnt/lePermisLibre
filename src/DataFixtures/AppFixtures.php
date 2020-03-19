<?php

namespace App\DataFixtures;

use App\Entity\City;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

        $faker = Factory::create();

        for ($i = 0; $i < 50; $i++) {
            $city = new City();
            $city->setName($faker->city())
                ->setLocation($faker->numberBetween($min = 1000, $max = 9000));

            $manager->persist($city);
        }

        $manager->flush();
    }
}
