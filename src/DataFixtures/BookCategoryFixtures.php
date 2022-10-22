<?php

namespace App\DataFixtures;

use App\Entity\BookCategory;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class BookCategoryFixtures extends Fixture
{

    public const POLICIER = "roman policier";
    public const CLASSIQUE = "roman classique";
    public const GRAPHIQUE = "roman graphique";
    public const SCIENCE_FICTION = "roman de science-fiction";
    public const FANTASTIQUE = "roman fantastique";
    public const ANTICIPATION = "roman d'anticipation";


    public function load(ObjectManager $manager): void
    {
        $bookCategory = new BookCategory ();
        $bookCategory->setName('Policier');
        $manager->persist($bookCategory);
        $this->setReference (self::POLICIER, $bookCategory);

        $bookCategory = new BookCategory ();
        $bookCategory->setName('Classique');
        $manager->persist($bookCategory);
        $this->setReference (self::CLASSIQUE, $bookCategory);
        
        $bookCategory = new BookCategory ();
        $bookCategory->setName('Graphique');
        $manager->persist($bookCategory);
        $this->setReference (self::GRAPHIQUE, $bookCategory);

        $bookCategory = new BookCategory ();
        $bookCategory->setName('Science fiction');
        $manager->persist($bookCategory);
        $this->setReference (self::SCIENCE_FICTION, $bookCategory);

        $bookCategory = new BookCategory ();
        $bookCategory->setName('Fantastique');
        $manager->persist($bookCategory);
        $this->setReference (self::FANTASTIQUE, $bookCategory);

        $bookCategory = new BookCategory ();
        $bookCategory->setName('Anticipation');
        $manager->persist($bookCategory);
        $this->setReference (self::ANTICIPATION, $bookCategory);
        
        
        $manager->flush();
    }
}
