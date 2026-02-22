<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260222135116 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE coaching_session ADD titre VARCHAR(255) NOT NULL, ADD description LONGTEXT NOT NULL, ADD date_debut DATETIME NOT NULL, ADD date_fin DATETIME NOT NULL, ADD statut VARCHAR(50) NOT NULL, ADD lien_reunion VARCHAR(255) DEFAULT NULL, ADD type VARCHAR(50) NOT NULL, ADD lieu VARCHAR(255) DEFAULT NULL, ADD niveau VARCHAR(100) DEFAULT NULL, ADD objectifs JSON DEFAULT NULL, ADD timezone VARCHAR(255) DEFAULT NULL, ADD email_envoye TINYINT(1) NOT NULL, ADD rappel_envoye TINYINT(1) NOT NULL, ADD created_at DATETIME NOT NULL, ADD updated_at DATETIME DEFAULT NULL, ADD joueur_id INT DEFAULT NULL, CHANGE coach_id coach_id INT DEFAULT NULL, CHANGE team_id team_id INT DEFAULT NULL, CHANGE session_date session_date DATETIME DEFAULT NULL, CHANGE duration duration INT DEFAULT NULL, CHANGE notes notes LONGTEXT DEFAULT NULL, CHANGE training_plan_id training_plan_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE coaching_session ADD CONSTRAINT FK_7BAAADB43C105691 FOREIGN KEY (coach_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE coaching_session ADD CONSTRAINT FK_7BAAADB4A9E2D76C FOREIGN KEY (joueur_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_7BAAADB43C105691 ON coaching_session (coach_id)');
        $this->addSql('CREATE INDEX IDX_7BAAADB4A9E2D76C ON coaching_session (joueur_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE coaching_session DROP FOREIGN KEY FK_7BAAADB43C105691');
        $this->addSql('ALTER TABLE coaching_session DROP FOREIGN KEY FK_7BAAADB4A9E2D76C');
        $this->addSql('DROP INDEX IDX_7BAAADB43C105691 ON coaching_session');
        $this->addSql('DROP INDEX IDX_7BAAADB4A9E2D76C ON coaching_session');
        $this->addSql('ALTER TABLE coaching_session DROP titre, DROP description, DROP date_debut, DROP date_fin, DROP statut, DROP lien_reunion, DROP type, DROP lieu, DROP niveau, DROP objectifs, DROP timezone, DROP email_envoye, DROP rappel_envoye, DROP created_at, DROP updated_at, DROP joueur_id, CHANGE notes notes VARCHAR(255) DEFAULT NULL, CHANGE coach_id coach_id INT NOT NULL, CHANGE team_id team_id INT NOT NULL, CHANGE duration duration INT NOT NULL, CHANGE session_date session_date DATETIME NOT NULL, CHANGE training_plan_id training_plan_id INT NOT NULL');
    }
}
