<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20261029160758 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE client CHANGE prenom prenom VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE produit ADD libelle VARCHAR(255) NOT NULL, DROP reference, DROP nom, DROP description, DROP date, DROP stock, CHANGE prix prix DOUBLE PRECISION NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE client CHANGE prenom prenom VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE produit ADD nom VARCHAR(255) NOT NULL, ADD description LONGTEXT NOT NULL, ADD date DATETIME NOT NULL, ADD stock INT NOT NULL, CHANGE prix prix NUMERIC(10, 2) NOT NULL, CHANGE libelle reference VARCHAR(255) NOT NULL');
    }
}
