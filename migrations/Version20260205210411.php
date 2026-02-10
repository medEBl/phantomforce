<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260205210411 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE matchy (id INT AUTO_INCREMENT NOT NULL, game VARCHAR(255) NOT NULL, match_date DATETIME NOT NULL, score_team1 INT DEFAULT NULL, score_team2 INT DEFAULT NULL, status VARCHAR(50) NOT NULL, team1_id INT NOT NULL, team2_id INT NOT NULL, winner_team_id INT DEFAULT NULL, INDEX IDX_8BCB895FE72BCFA4 (team1_id), INDEX IDX_8BCB895FF59E604A (team2_id), INDEX IDX_8BCB895FC5237001 (winner_team_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE team (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, game VARCHAR(255) NOT NULL, creation_date DATETIME NOT NULL, coach_id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE matchy ADD CONSTRAINT FK_8BCB895FE72BCFA4 FOREIGN KEY (team1_id) REFERENCES team (id)');
        $this->addSql('ALTER TABLE matchy ADD CONSTRAINT FK_8BCB895FF59E604A FOREIGN KEY (team2_id) REFERENCES team (id)');
        $this->addSql('ALTER TABLE matchy ADD CONSTRAINT FK_8BCB895FC5237001 FOREIGN KEY (winner_team_id) REFERENCES team (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE matchy DROP FOREIGN KEY FK_8BCB895FE72BCFA4');
        $this->addSql('ALTER TABLE matchy DROP FOREIGN KEY FK_8BCB895FF59E604A');
        $this->addSql('ALTER TABLE matchy DROP FOREIGN KEY FK_8BCB895FC5237001');
        $this->addSql('DROP TABLE matchy');
        $this->addSql('DROP TABLE team');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
