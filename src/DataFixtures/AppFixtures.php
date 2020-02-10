<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        
        $faker = Factory::create();
        $i = 1;
        
        while($i<30){
           $card = new CardTemplate();

            $nom = $faker->sentence(2,true);
            $card->setName('Modèle '.$i.' : '.$nom)
                ->setDescription($faker->paragraph(5))
                ->setActive($faker->boolean(60))
                ->setPremium($faker->boolean(30))
                ->setPreview('https://source.unsplash.com/random/200x200');
                
            $manager->persist($card); 
            $i++;
        }

        
        $manager->flush();
    }
}
