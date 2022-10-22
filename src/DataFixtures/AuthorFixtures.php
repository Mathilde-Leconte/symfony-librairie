<?php

namespace App\DataFixtures;

use App\Entity\Author;
use Monolog\DateTimeImmutable;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;


class AuthorFixtures extends Fixture
{
    public const JEAN_ROBA = "jean-roba";
    public const DOUGLAS_ADAMS = "douglas-adams";
    public const TERRY_PRATCHETT = "terry-pratchett";
    public const MAXIME_CHATTAM="maxime-chattam";

    public function load(ObjectManager $manager): void
    {
        $author = new Author();
        $author->setName('Roba');
        $author->setFirstName('Jean');
        $author->setSlug('jean-roba');
        $author->setImageName("jean-roba.jpg");
        $author->setBirthdate(new DateTimeImmutable("1930-07-28"));
        $manager->persist($author);
        $this->setReference(self::JEAN_ROBA, $author);

        $author = new Author();
        $author->setName('Pratchett');
        $author->setFirstName('Terry');
        $author->setSlug('terry-pratchett');
        $author->setImageName("terry-pratchett.jpg");
        $author->setBirthdate(new DateTimeImmutable("1948-04-28"));
        $author->setDateOfDeath(new DateTimeImmutable("2015-03-12"));
        $manager->persist($author);
        $this->setReference(self::TERRY_PRATCHETT, $author);

        $author = new Author();
        $author->setName('Adams');
        $author->setFirstName('Douglas');
        $author->setSlug('douglas-adams');
        $author->setImageName("douglas-adams.jpg");
        $author->setBirthdate(new DateTimeImmutable("1952-03-11"));
        $author->setDateOfDeath(new DateTimeImmutable("2001-05-11"));
        $manager->persist($author);
        $this->setReference(self::DOUGLAS_ADAMS, $author);

        $author = new Author();
        $author->setName('Chattam');
        $author->setFirstName('Maxime');
        $author->setSlug('maxime-chattam');
        $author->setImageName("chattam-maxime.jpg");
        $author->setBirthdate(new DateTimeImmutable("1976-02-19"));
        $manager->persist($author);
        $this->setReference(self::MAXIME_CHATTAM, $author);

        $manager->flush();
    }
}
