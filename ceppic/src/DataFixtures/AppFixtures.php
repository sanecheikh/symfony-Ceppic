<?php

namespace App\DataFixtures;

use App\Entity\Formation;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Generator;

class AppFixtures extends Fixture
{ private Generator $faker;
    public function __construct()
    {
        $this->faker = factory::create('fr_FR');
    }
    public function load(ObjectManager $manager): void

    {  
        for ($i =0;$i < 10 ;$i++)

        {
        $formation =new Formation();
        $formation->setTitre($this ->Faker->words(5,true))
        ->setDescription($this->faker->text);
    
        
        

        $manager->flush();
    }
}
}