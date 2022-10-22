<?php

namespace App\DataFixtures;

use App\Entity\Book;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class BookFixtures extends Fixture
{

    public function load(ObjectManager $manager): void
    {
        $book= new Book();
        $book->setTitle("L'échappée bill");
        $book->setSlug("l-echapee-bill");
        $book->setImageName('boule-bill-tome-43-lechapee-bill.jpg');
        $book->setAuthor($this->getReference(AuthorFixtures::JEAN_ROBA));
        $book->setBookCategory($this->getReference(BookCategoryFixtures::GRAPHIQUE));
        $book->setIsActive(true);
        $manager->persist($book);

        $book= new Book();
        $book->setTitle("Le Guide du voyageur galactique Tome1");
        $book->setSlug("Le-Guide-du-voyageur-galactique-Tome1");
        $book->setImageName('h2g2-1.jpg');
        $book->setAuthor($this->getReference(AuthorFixtures::DOUGLAS_ADAMS));
        $book->setBookCategory($this->getReference(BookCategoryFixtures::SCIENCE_FICTION));
        $book->setIsActive(true);
        $manager->persist($book);

        $book= new Book();
        $book->setTitle("Le dernier Restaurant avant la fin du monde Tome2");
        $book->setSlug("Le-dernier-Restaurant-avant-la-fin-du-monde-Tome2");
        $book->setImageName('h2g2-2.jpg');
        $book->setAuthor($this->getReference(AuthorFixtures::DOUGLAS_ADAMS));
        $book->setBookCategory($this->getReference(BookCategoryFixtures::SCIENCE_FICTION));
        $book->setIsActive(true);
        $manager->persist($book);

        $book= new Book();
        $book->setTitle("La vie,l'univers et le reste Tome3");
        $book->setSlug("La vie,l'univers et le reste Tome3");
        $book->setImageName('h2g2-3.jpg');
        $book->setAuthor($this->getReference(AuthorFixtures::DOUGLAS_ADAMS));
        $book->setBookCategory($this->getReference(BookCategoryFixtures::SCIENCE_FICTION));
        $book->setIsActive(true);
        $manager->persist($book);


        $book= new Book();
        $book->setTitle("Salut, et encore merci pour le poisson Tome4");
        $book->setSlug("Salut-et-encore-merci-pour-le-poisson-Tome4");
        $book->setImageName('h2g2-4.jpg');
        $book->setAuthor($this->getReference(AuthorFixtures::DOUGLAS_ADAMS));
        $book->setBookCategory($this->getReference(BookCategoryFixtures::SCIENCE_FICTION));
        $book->setIsActive(true);
        $manager->persist($book);


        $book= new Book();
        $book->setTitle("Le Globalement inoffensive Tome5");
        $book->setSlug("Le-Globalement-inoffensive-Tome5");
        $book->setImageName('h2g2-5.jpg');
        $book->setAuthor($this->getReference(AuthorFixtures::DOUGLAS_ADAMS));
        $book->setBookCategory($this->getReference(BookCategoryFixtures::SCIENCE_FICTION));
        $book->setIsActive(true);
        $manager->persist($book);


        $manager->flush();
    }
}
