<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191113144840 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE e_contact_info (id INT AUTO_INCREMENT NOT NULL, email LONGTEXT NOT NULL, phoneNumber1 LONGTEXT NOT NULL, phoneNumber2 LONGTEXT NOT NULL, phoneNumber3 LONGTEXT NOT NULL, socialMedia1 LONGTEXT NOT NULL, socialMedia2 LONGTEXT NOT NULL, socialMedia3 LONGTEXT NOT NULL, socialMedia4 LONGTEXT NOT NULL, socialMedia5 LONGTEXT NOT NULL, address LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE e_avatar_image CHANGE updated updated TIMESTAMP ON UPDATE CURRENT_TIMESTAMP  DEFAULT CURRENT_TIMESTAMP');
        $this->addSql('ALTER TABLE e_post_images CHANGE updated updated TIMESTAMP ON UPDATE CURRENT_TIMESTAMP  DEFAULT CURRENT_TIMESTAMP');
        $this->addSql('ALTER TABLE e_staff_avatar CHANGE updated updated TIMESTAMP ON UPDATE CURRENT_TIMESTAMP  DEFAULT CURRENT_TIMESTAMP');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE e_contact_info');
        $this->addSql('ALTER TABLE e_avatar_image CHANGE updated updated DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL');
        $this->addSql('ALTER TABLE e_post_images CHANGE updated updated DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL');
        $this->addSql('ALTER TABLE e_staff_avatar CHANGE updated updated DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL');
    }
}
