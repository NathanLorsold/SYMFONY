<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;



class Jeu1 extends Fixture
{
    public function load(ObjectManager $manager): void
    {


        $manager->flush();
    }

}
