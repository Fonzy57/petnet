<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200604092705 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE animal (id INT AUTO_INCREMENT NOT NULL, user_iduser_id INT NOT NULL, type VARCHAR(255) NOT NULL, race VARCHAR(255) NOT NULL, name VARCHAR(255) NOT NULL, age INT NOT NULL, localisation VARCHAR(255) NOT NULL, visio_box TINYINT(1) NOT NULL, created_by VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, updated_by VARCHAR(255) NOT NULL, updated_at DATETIME NOT NULL, INDEX IDX_6AAB231F788A0C1F (user_iduser_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE animal ADD CONSTRAINT FK_6AAB231F788A0C1F FOREIGN KEY (user_iduser_id) REFERENCES user (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE animal');
    }
}
