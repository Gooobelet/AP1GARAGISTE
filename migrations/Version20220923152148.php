<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220923152148 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE utiliser_materiel DROP FOREIGN KEY FK_19506D6616880AAF');
        $this->addSql('ALTER TABLE reserver_prestation DROP FOREIGN KEY FK_9FAB29A89E45C554');
        $this->addSql('ALTER TABLE utiliser_prestation DROP FOREIGN KEY FK_F257573C9E45C554');
        $this->addSql('ALTER TABLE reserver_prestation DROP FOREIGN KEY FK_9FAB29A844A67F3');
        $this->addSql('ALTER TABLE reserver_utilisateur DROP FOREIGN KEY FK_6DB8F49A44A67F3');
        $this->addSql('ALTER TABLE utiliser_materiel DROP FOREIGN KEY FK_19506D66F6A812E5');
        $this->addSql('ALTER TABLE utiliser_prestation DROP FOREIGN KEY FK_F257573CF6A812E5');
        $this->addSql('DROP TABLE materiel');
        $this->addSql('DROP TABLE prestation');
        $this->addSql('DROP TABLE reserver');
        $this->addSql('DROP TABLE reserver_prestation');
        $this->addSql('DROP TABLE reserver_utilisateur');
        $this->addSql('DROP TABLE utiliser');
        $this->addSql('DROP TABLE utiliser_materiel');
        $this->addSql('DROP TABLE utiliser_prestation');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE materiel (id INT AUTO_INCREMENT NOT NULL, ref_mat VARCHAR(10) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, prix_unitaire DOUBLE PRECISION NOT NULL, description VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, nom_image VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE prestation (id INT AUTO_INCREMENT NOT NULL, id_presta INT NOT NULL, libelle_presta VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, prix_presta DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE reserver (id INT AUTO_INCREMENT NOT NULL, date_reserv DATE NOT NULL, date_passage DATE NOT NULL, heure_passage TIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE reserver_prestation (reserver_id INT NOT NULL, prestation_id INT NOT NULL, INDEX IDX_9FAB29A844A67F3 (reserver_id), INDEX IDX_9FAB29A89E45C554 (prestation_id), PRIMARY KEY(reserver_id, prestation_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE reserver_utilisateur (reserver_id INT NOT NULL, utilisateur_id INT NOT NULL, INDEX IDX_6DB8F49A44A67F3 (reserver_id), INDEX IDX_6DB8F49AFB88E14F (utilisateur_id), PRIMARY KEY(reserver_id, utilisateur_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE utiliser (id INT AUTO_INCREMENT NOT NULL, nb_mat INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE utiliser_materiel (utiliser_id INT NOT NULL, materiel_id INT NOT NULL, INDEX IDX_19506D6616880AAF (materiel_id), INDEX IDX_19506D66F6A812E5 (utiliser_id), PRIMARY KEY(utiliser_id, materiel_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE utiliser_prestation (utiliser_id INT NOT NULL, prestation_id INT NOT NULL, INDEX IDX_F257573C9E45C554 (prestation_id), INDEX IDX_F257573CF6A812E5 (utiliser_id), PRIMARY KEY(utiliser_id, prestation_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE reserver_prestation ADD CONSTRAINT FK_9FAB29A844A67F3 FOREIGN KEY (reserver_id) REFERENCES reserver (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reserver_prestation ADD CONSTRAINT FK_9FAB29A89E45C554 FOREIGN KEY (prestation_id) REFERENCES prestation (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reserver_utilisateur ADD CONSTRAINT FK_6DB8F49A44A67F3 FOREIGN KEY (reserver_id) REFERENCES reserver (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reserver_utilisateur ADD CONSTRAINT FK_6DB8F49AFB88E14F FOREIGN KEY (utilisateur_id) REFERENCES utilisateur (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE utiliser_materiel ADD CONSTRAINT FK_19506D66F6A812E5 FOREIGN KEY (utiliser_id) REFERENCES utiliser (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE utiliser_materiel ADD CONSTRAINT FK_19506D6616880AAF FOREIGN KEY (materiel_id) REFERENCES materiel (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE utiliser_prestation ADD CONSTRAINT FK_F257573CF6A812E5 FOREIGN KEY (utiliser_id) REFERENCES utiliser (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE utiliser_prestation ADD CONSTRAINT FK_F257573C9E45C554 FOREIGN KEY (prestation_id) REFERENCES prestation (id) ON UPDATE NO ACTION ON DELETE CASCADE');
    }
}
