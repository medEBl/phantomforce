<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260204233900 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE coaching_session (id INT AUTO_INCREMENT NOT NULL, coach_id INT NOT NULL, team_id INT NOT NULL, session_date DATETIME NOT NULL, duration INT NOT NULL, notes VARCHAR(255) DEFAULT NULL, training_plan_id INT NOT NULL, INDEX IDX_7BAAADB435A79295 (training_plan_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8');
        $this->addSql('CREATE TABLE training_plan (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, focus_area VARCHAR(255) NOT NULL, difficulty_level VARCHAR(255) NOT NULL, coach_id INT NOT NULL, created_at DATETIME NOT NULL, PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8');
        $this->addSql('ALTER TABLE coaching_session ADD CONSTRAINT FK_7BAAADB435A79295 FOREIGN KEY (training_plan_id) REFERENCES training_plan (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE coaching_session DROP FOREIGN KEY FK_7BAAADB435A79295');
        $this->addSql('DROP TABLE coaching_session');
        $this->addSql('DROP TABLE training_plan');
    }
}
