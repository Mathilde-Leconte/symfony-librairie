<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221021140132 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE book ADD book_category_id INT NOT NULL');
        $this->addSql('ALTER TABLE book ADD CONSTRAINT FK_CBE5A33140B1D29E FOREIGN KEY (book_category_id) REFERENCES book_category (id)');
        $this->addSql('CREATE INDEX IDX_CBE5A33140B1D29E ON book (book_category_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE book DROP FOREIGN KEY FK_CBE5A33140B1D29E');
        $this->addSql('DROP INDEX IDX_CBE5A33140B1D29E ON book');
        $this->addSql('ALTER TABLE book DROP book_category_id');
    }
}
