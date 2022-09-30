<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220923144848 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE utiliser (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE utiliser_materiel (utiliser_id INT NOT NULL, materiel_id INT NOT NULL, INDEX IDX_19506D66F6A812E5 (utiliser_id), INDEX IDX_19506D6616880AAF (materiel_id), PRIMARY KEY(utiliser_id, materiel_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE utiliser_materiel ADD CONSTRAINT FK_19506D66F6A812E5 FOREIGN KEY (utiliser_id) REFERENCES utiliser (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE utiliser_materiel ADD CONSTRAINT FK_19506D6616880AAF FOREIGN KEY (materiel_id) REFERENCES materiel (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE avis ADD id_user_avis_id INT NOT NULL');
        $this->addSql('ALTER TABLE avis ADD CONSTRAINT FK_8F91ABF062B21BE7 FOREIGN KEY (id_user_avis_id) REFERENCES utilisateur (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8F91ABF062B21BE7 ON avis (id_user_avis_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE utiliser_materiel DROP FOREIGN KEY FK_19506D66F6A812E5');
        $this->addSql('DROP TABLE utiliser');
        $this->addSql('DROP TABLE utiliser_materiel');
        $this->addSql('ALTER TABLE avis DROP FOREIGN KEY FK_8F91ABF062B21BE7');
        $this->addSql('DROP INDEX UNIQ_8F91ABF062B21BE7 ON avis');
        $this->addSql('ALTER TABLE avis DROP id_user_avis_id');
    }
}
