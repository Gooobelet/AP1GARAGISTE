<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221012132808 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE prestation (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(50) NOT NULL, img VARCHAR(50) NOT NULL, prix VARCHAR(50) NOT NULL, temps VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE avis ADD nom VARCHAR(20) NOT NULL, ADD prenom VARCHAR(20) NOT NULL, DROP id_avis');
        $this->addSql('ALTER TABLE contact DROP FOREIGN KEY FK_4C62E638A998202E');
        $this->addSql('DROP INDEX UNIQ_4C62E638A998202E ON contact');
        $this->addSql('ALTER TABLE contact DROP id_user_contact_id, DROP id_contact');
        $this->addSql('ALTER TABLE utilisateur DROP id_user');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE prestation');
        $this->addSql('ALTER TABLE avis ADD id_avis INT NOT NULL, DROP nom, DROP prenom');
        $this->addSql('ALTER TABLE contact ADD id_user_contact_id INT NOT NULL, ADD id_contact INT NOT NULL');
        $this->addSql('ALTER TABLE contact ADD CONSTRAINT FK_4C62E638A998202E FOREIGN KEY (id_user_contact_id) REFERENCES utilisateur (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_4C62E638A998202E ON contact (id_user_contact_id)');
        $this->addSql('ALTER TABLE utilisateur ADD id_user INT NOT NULL');
    }
}
