<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220608193907 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE categories (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE competences (id INT AUTO_INCREMENT NOT NULL, id_categorie INT NOT NULL, nom VARCHAR(255) NOT NULL, INDEX IDX_DB2077CEC9486A13 (id_categorie), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE documents (id INT AUTO_INCREMENT NOT NULL, id_profil INT NOT NULL, type_contenu VARCHAR(255) NOT NULL, ext VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, type_fichier VARCHAR(255) NOT NULL, INDEX IDX_A2B07288C0E1077A (id_profil), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE entreprises (id INT AUTO_INCREMENT NOT NULL, raison_sociale VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, adresse2 VARCHAR(255) NOT NULL, code_postal INT NOT NULL, ville VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE experiences (id INT AUTO_INCREMENT NOT NULL, id_entreprise INT NOT NULL, id_profil INT NOT NULL, contexte VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, date_debut DATE NOT NULL, date_fin DATE NOT NULL, lieu VARCHAR(255) NOT NULL, INDEX IDX_82020E70A8937AB7 (id_entreprise), INDEX IDX_82020E70C0E1077A (id_profil), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE historique_profil (id INT AUTO_INCREMENT NOT NULL, id_profil INT NOT NULL, date_debut DATE NOT NULL, date_fin DATE NOT NULL, type VARCHAR(255) NOT NULL, INDEX IDX_2F9412CBC0E1077A (id_profil), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE profil_competences (id INT AUTO_INCREMENT NOT NULL, id_profil INT NOT NULL, id_competence INT DEFAULT NULL, attrait TINYINT(1) NOT NULL, niveau INT NOT NULL, INDEX IDX_811E6E8EC0E1077A (id_profil), INDEX IDX_811E6E8E315EE8A8 (id_competence), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE profils (id INT AUTO_INCREMENT NOT NULL, id_utilisateur INT NOT NULL, fonction VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, code_postal VARCHAR(255) NOT NULL, ville VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, date_naissance DATE NOT NULL, email VARCHAR(255) NOT NULL, telephone VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, INDEX IDX_75831F5E50EAE44 (id_utilisateur), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE utilisateurs (id INT AUTO_INCREMENT NOT NULL, login VARCHAR(255) NOT NULL, mdp VARCHAR(255) NOT NULL, role VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE competences ADD CONSTRAINT FK_DB2077CEC9486A13 FOREIGN KEY (id_categorie) REFERENCES categories (id)');
        $this->addSql('ALTER TABLE documents ADD CONSTRAINT FK_A2B07288C0E1077A FOREIGN KEY (id_profil) REFERENCES profils (id)');
        $this->addSql('ALTER TABLE experiences ADD CONSTRAINT FK_82020E70A8937AB7 FOREIGN KEY (id_entreprise) REFERENCES entreprises (id)');
        $this->addSql('ALTER TABLE experiences ADD CONSTRAINT FK_82020E70C0E1077A FOREIGN KEY (id_profil) REFERENCES profils (id)');
        $this->addSql('ALTER TABLE historique_profil ADD CONSTRAINT FK_2F9412CBC0E1077A FOREIGN KEY (id_profil) REFERENCES profils (id)');
        $this->addSql('ALTER TABLE profil_competences ADD CONSTRAINT FK_811E6E8EC0E1077A FOREIGN KEY (id_profil) REFERENCES profils (id)');
        $this->addSql('ALTER TABLE profil_competences ADD CONSTRAINT FK_811E6E8E315EE8A8 FOREIGN KEY (id_competence) REFERENCES competences (id)');
        $this->addSql('ALTER TABLE profils ADD CONSTRAINT FK_75831F5E50EAE44 FOREIGN KEY (id_utilisateur) REFERENCES utilisateurs (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE competences DROP FOREIGN KEY FK_DB2077CEC9486A13');
        $this->addSql('ALTER TABLE profil_competences DROP FOREIGN KEY FK_811E6E8E315EE8A8');
        $this->addSql('ALTER TABLE experiences DROP FOREIGN KEY FK_82020E70A8937AB7');
        $this->addSql('ALTER TABLE documents DROP FOREIGN KEY FK_A2B07288C0E1077A');
        $this->addSql('ALTER TABLE experiences DROP FOREIGN KEY FK_82020E70C0E1077A');
        $this->addSql('ALTER TABLE historique_profil DROP FOREIGN KEY FK_2F9412CBC0E1077A');
        $this->addSql('ALTER TABLE profil_competences DROP FOREIGN KEY FK_811E6E8EC0E1077A');
        $this->addSql('ALTER TABLE profils DROP FOREIGN KEY FK_75831F5E50EAE44');
        $this->addSql('DROP TABLE categories');
        $this->addSql('DROP TABLE competences');
        $this->addSql('DROP TABLE documents');
        $this->addSql('DROP TABLE entreprises');
        $this->addSql('DROP TABLE experiences');
        $this->addSql('DROP TABLE historique_profil');
        $this->addSql('DROP TABLE profil_competences');
        $this->addSql('DROP TABLE profils');
        $this->addSql('DROP TABLE utilisateurs');
    }
}
