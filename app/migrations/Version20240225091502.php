<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240225091502 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE movie ADD image_url VARCHAR(255) NOT NULL, CHANGE directors directors LONGTEXT NOT NULL COMMENT \'(DC2Type:simple_array)\', CHANGE stars stars LONGTEXT NOT NULL COMMENT \'(DC2Type:simple_array)\', CHANGE writers writers LONGTEXT NOT NULL COMMENT \'(DC2Type:simple_array)\'');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE movie DROP image_url, CHANGE directors directors JSON NOT NULL, CHANGE stars stars JSON NOT NULL, CHANGE writers writers JSON NOT NULL');
    }
}
