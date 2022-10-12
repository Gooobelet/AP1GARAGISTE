<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221012091521 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE avis ADD id_user_avis_id INT NOT NULL');
        $this->addSql('ALTER TABLE avis ADD CONSTRAINT FK_8F91ABF062B21BE7 FOREIGN KEY (id_user_avis_id) REFERENCES utilisateur (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8F91ABF062B21BE7 ON avis (id_user_avis_id)');
        $this->addSql('ALTER TABLE utilisateur DROP id_user');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE avis DROP FOREIGN KEY FK_8F91ABF062B21BE7');
        $this->addSql('DROP INDEX UNIQ_8F91ABF062B21BE7 ON avis');
        $this->addSql('ALTER TABLE avis DROP id_user_avis_id');
        $this->addSql('ALTER TABLE utilisateur ADD id_user INT NOT NULL');
    }
}
