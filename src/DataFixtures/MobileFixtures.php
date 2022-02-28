<?php

namespace App\DataFixtures;

use App\Entity\Mobile;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MobileFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i=1; $i<20; $i++) {
            $mobile = new Mobile;
            $mobile->setName("Phone $i");
            $mobile->setPrice(2000.90);
            $mobile->setDate(\DateTime::createFromFormat('Y-m-d', '2022-10-25'));
            $manager->persist($mobile);
        }
        $manager->flush();
    }
}
