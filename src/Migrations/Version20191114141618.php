<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191114141618 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE e_staff_avatar CHANGE updated updated TIMESTAMP ON UPDATE CURRENT_TIMESTAMP  DEFAULT CURRENT_TIMESTAMP');
        $this->addSql('ALTER TABLE e_avatar_image CHANGE updated updated TIMESTAMP ON UPDATE CURRENT_TIMESTAMP  DEFAULT CURRENT_TIMESTAMP');
        $this->addSql('ALTER TABLE e_customer_avatar CHANGE updated updated TIMESTAMP ON UPDATE CURRENT_TIMESTAMP  DEFAULT CURRENT_TIMESTAMP');
        $this->addSql('ALTER TABLE e_post_images CHANGE updated updated TIMESTAMP ON UPDATE CURRENT_TIMESTAMP  DEFAULT CURRENT_TIMESTAMP');
        $this->addSql('ALTER TABLE e_contact_info CHANGE email email LONGTEXT DEFAULT NULL, CHANGE phoneNumber1 phoneNumber1 LONGTEXT DEFAULT NULL, CHANGE address address LONGTEXT DEFAULT NULL');
        $this->addSql('ALTER TABLE e_post CHANGE price price DOUBLE PRECISION DEFAULT NULL, CHANGE square square DOUBLE PRECISION DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE e_avatar_image CHANGE updated updated DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL');
        $this->addSql('ALTER TABLE e_contact_info CHANGE email email LONGTEXT NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE phoneNumber1 phoneNumber1 LONGTEXT NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE address address LONGTEXT NOT NULL COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE e_customer_avatar CHANGE updated updated DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL');
        $this->addSql('ALTER TABLE e_post CHANGE price price LONGTEXT DEFAULT NULL COLLATE utf8mb4_unicode_ci, CHANGE square square LONGTEXT DEFAULT NULL COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE e_post_images CHANGE updated updated DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL');
        $this->addSql('ALTER TABLE e_staff_avatar CHANGE updated updated DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL');
    }
}
