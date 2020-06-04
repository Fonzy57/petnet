<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200604140323 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE message (id INT AUTO_INCREMENT NOT NULL, user_iduser_id INT NOT NULL, animal_idanimal_id INT DEFAULT NULL, subject VARCHAR(255) NOT NULL, content LONGTEXT NOT NULL, sender VARCHAR(255) NOT NULL, date_demande DATE NOT NULL, date_rdv DATE DEFAULT NULL, ask_visio VARCHAR(255) DEFAULT NULL, ask_rdv VARCHAR(255) DEFAULT NULL, ask_esthetic VARCHAR(255) DEFAULT NULL, INDEX IDX_B6BD307F788A0C1F (user_iduser_id), INDEX IDX_B6BD307F5737565A (animal_idanimal_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE message ADD CONSTRAINT FK_B6BD307F788A0C1F FOREIGN KEY (user_iduser_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE message ADD CONSTRAINT FK_B6BD307F5737565A FOREIGN KEY (animal_idanimal_id) REFERENCES animal (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE message');
    }
}
