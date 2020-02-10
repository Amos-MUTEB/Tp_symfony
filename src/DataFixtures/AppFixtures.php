<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\CardTemplate;
use Faker\Factory;
class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        
        $faker = Factory::create();

        for ($i = 0 ; $i <= 6 ; $i++)
{        $card_template = new CardTemplate();
        $card_template->setName($faker->word())
        ->setDescription($faker->realText($maxNbChars = 20, $indexSize = 2))
        ->setActive($faker->randomFloat(2))
        ->setPremium($faker->boolean(20))
        ->setPreview($faker->realText($maxNbChars = 20, $indexSize = 2));

        $manager->persist($card_template);

    }
        $manager->flush();
    }
}
