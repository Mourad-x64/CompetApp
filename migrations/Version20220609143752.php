<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220609143752 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE experiences CHANGE date_fin date_fin DATE DEFAULT NULL');
        $this->addSql('ALTER TABLE historique_profil CHANGE date_fin date_fin DATE DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE experiences CHANGE date_fin date_fin DATE NOT NULL');
        $this->addSql('ALTER TABLE historique_profil CHANGE date_fin date_fin DATE NOT NULL');
    }
}
