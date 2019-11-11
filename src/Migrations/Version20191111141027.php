<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191111141027 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE e_avatar_image CHANGE updated updated TIMESTAMP ON UPDATE CURRENT_TIMESTAMP  DEFAULT CURRENT_TIMESTAMP');
        $this->addSql('ALTER TABLE e_post ADD staffName LONGTEXT NOT NULL, ADD staffEmail LONGTEXT NOT NULL, ADD staffPhone LONGTEXT NOT NULL, ADD staffDescription LONGTEXT NOT NULL');
        $this->addSql('ALTER TABLE e_post_images CHANGE updated updated TIMESTAMP ON UPDATE CURRENT_TIMESTAMP  DEFAULT CURRENT_TIMESTAMP');
        $this->addSql('ALTER TABLE e_staff_avatar CHANGE updated updated TIMESTAMP ON UPDATE CURRENT_TIMESTAMP  DEFAULT CURRENT_TIMESTAMP');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE e_avatar_image CHANGE updated updated DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL');
        $this->addSql('ALTER TABLE e_post DROP staffName, DROP staffEmail, DROP staffPhone, DROP staffDescription');
        $this->addSql('ALTER TABLE e_post_images CHANGE updated updated DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL');
        $this->addSql('ALTER TABLE e_staff_avatar CHANGE updated updated DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL');
    }
}
