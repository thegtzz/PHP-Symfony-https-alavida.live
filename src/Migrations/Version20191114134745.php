<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191114134745 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE e_category (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE e_contact_info (id INT AUTO_INCREMENT NOT NULL, email LONGTEXT NOT NULL, phoneNumber1 LONGTEXT NOT NULL, phoneNumber2 LONGTEXT DEFAULT NULL, phoneNumber3 LONGTEXT DEFAULT NULL, socialMedia1 LONGTEXT DEFAULT NULL, socialMedia2 LONGTEXT DEFAULT NULL, socialMedia3 LONGTEXT DEFAULT NULL, socialMedia4 LONGTEXT DEFAULT NULL, socialMedia5 LONGTEXT DEFAULT NULL, address LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE e_customer_avatar (id INT AUTO_INCREMENT NOT NULL, filename VARCHAR(255) NOT NULL, updated TIMESTAMP ON UPDATE CURRENT_TIMESTAMP  DEFAULT CURRENT_TIMESTAMP, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE e_customer_review (id INT AUTO_INCREMENT NOT NULL, customer_avatar_id INT DEFAULT NULL, customerShortReview LONGTEXT DEFAULT NULL, customerMainReview LONGTEXT DEFAULT NULL, customerName LONGTEXT DEFAULT NULL, UNIQUE INDEX UNIQ_1742BB112DC5C30A (customer_avatar_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE e_avatar_image (id INT AUTO_INCREMENT NOT NULL, filename VARCHAR(255) NOT NULL, updated TIMESTAMP ON UPDATE CURRENT_TIMESTAMP  DEFAULT CURRENT_TIMESTAMP, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE e_location (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE e_post (id INT AUTO_INCREMENT NOT NULL, location_id INT NOT NULL, category_id INT NOT NULL, image_avatar_id INT DEFAULT NULL, title VARCHAR(255) NOT NULL, status LONGTEXT DEFAULT NULL, propertyType LONGTEXT DEFAULT NULL, contract LONGTEXT DEFAULT NULL, price LONGTEXT DEFAULT NULL, square LONGTEXT DEFAULT NULL, propertyName LONGTEXT DEFAULT NULL, contactPerson LONGTEXT DEFAULT NULL, propertyDescription LONGTEXT DEFAULT NULL, youtubeLink LONGTEXT DEFAULT NULL, publicFacilitiesDistance1 LONGTEXT DEFAULT NULL, publicFacilitiesDescription1 LONGTEXT DEFAULT NULL, publicFacilitiesDistance2 LONGTEXT DEFAULT NULL, publicFacilitiesDescription2 LONGTEXT DEFAULT NULL, publicFacilitiesDistance3 LONGTEXT DEFAULT NULL, publicFacilitiesDescription3 LONGTEXT DEFAULT NULL, publicFacilitiesDistance4 LONGTEXT DEFAULT NULL, publicFacilitiesDescription4 LONGTEXT DEFAULT NULL, publicFacilitiesDistance5 LONGTEXT DEFAULT NULL, publicFacilitiesDescription5 LONGTEXT DEFAULT NULL, publicFacilitiesDistance6 LONGTEXT DEFAULT NULL, publicFacilitiesDescription6 LONGTEXT DEFAULT NULL, INDEX IDX_2876D4C164D218E (location_id), INDEX IDX_2876D4C112469DE2 (category_id), UNIQUE INDEX UNIQ_2876D4C15EBAE044 (image_avatar_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE e_post_images (id INT AUTO_INCREMENT NOT NULL, post_id INT DEFAULT NULL, filename VARCHAR(255) NOT NULL, updated TIMESTAMP ON UPDATE CURRENT_TIMESTAMP  DEFAULT CURRENT_TIMESTAMP, INDEX IDX_E9FD01514B89032C (post_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE e_staff_info (id INT AUTO_INCREMENT NOT NULL, staff_avatar_id INT DEFAULT NULL, staffName LONGTEXT DEFAULT NULL, staffPosition LONGTEXT DEFAULT NULL, staffEmail LONGTEXT DEFAULT NULL, staffPhone LONGTEXT DEFAULT NULL, UNIQUE INDEX UNIQ_EA57DB3BB774EB5F (staff_avatar_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE e_staff_avatar (id INT AUTO_INCREMENT NOT NULL, filename VARCHAR(255) NOT NULL, updated TIMESTAMP ON UPDATE CURRENT_TIMESTAMP  DEFAULT CURRENT_TIMESTAMP, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fos_user (id INT UNSIGNED AUTO_INCREMENT NOT NULL, username VARCHAR(180) NOT NULL, username_canonical VARCHAR(180) NOT NULL, email VARCHAR(180) NOT NULL, email_canonical VARCHAR(180) NOT NULL, enabled TINYINT(1) NOT NULL, salt VARCHAR(255) DEFAULT NULL, password VARCHAR(255) NOT NULL, last_login DATETIME DEFAULT NULL, confirmation_token VARCHAR(180) DEFAULT NULL, password_requested_at DATETIME DEFAULT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, date_of_birth DATETIME DEFAULT NULL, firstname VARCHAR(64) DEFAULT NULL, lastname VARCHAR(64) DEFAULT NULL, website VARCHAR(64) DEFAULT NULL, biography VARCHAR(1000) DEFAULT NULL, gender VARCHAR(1) DEFAULT NULL, locale VARCHAR(8) DEFAULT NULL, timezone VARCHAR(64) DEFAULT NULL, phone VARCHAR(64) DEFAULT NULL, facebook_uid VARCHAR(255) DEFAULT NULL, facebook_name VARCHAR(255) DEFAULT NULL, facebook_data JSON DEFAULT NULL, twitter_uid VARCHAR(255) DEFAULT NULL, twitter_name VARCHAR(255) DEFAULT NULL, twitter_data JSON DEFAULT NULL, gplus_uid VARCHAR(255) DEFAULT NULL, gplus_name VARCHAR(255) DEFAULT NULL, gplus_data JSON DEFAULT NULL, token VARCHAR(255) DEFAULT NULL, two_step_code VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_957A647992FC23A8 (username_canonical), UNIQUE INDEX UNIQ_957A6479A0D96FBF (email_canonical), UNIQUE INDEX UNIQ_957A6479C05FB297 (confirmation_token), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE e_customer_review ADD CONSTRAINT FK_1742BB112DC5C30A FOREIGN KEY (customer_avatar_id) REFERENCES e_customer_avatar (id)');
        $this->addSql('ALTER TABLE e_post ADD CONSTRAINT FK_2876D4C164D218E FOREIGN KEY (location_id) REFERENCES e_location (id)');
        $this->addSql('ALTER TABLE e_post ADD CONSTRAINT FK_2876D4C112469DE2 FOREIGN KEY (category_id) REFERENCES e_category (id)');
        $this->addSql('ALTER TABLE e_post ADD CONSTRAINT FK_2876D4C15EBAE044 FOREIGN KEY (image_avatar_id) REFERENCES e_avatar_image (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE e_post_images ADD CONSTRAINT FK_E9FD01514B89032C FOREIGN KEY (post_id) REFERENCES e_post (id)');
        $this->addSql('ALTER TABLE e_staff_info ADD CONSTRAINT FK_EA57DB3BB774EB5F FOREIGN KEY (staff_avatar_id) REFERENCES e_staff_avatar (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE e_post DROP FOREIGN KEY FK_2876D4C112469DE2');
        $this->addSql('ALTER TABLE e_customer_review DROP FOREIGN KEY FK_1742BB112DC5C30A');
        $this->addSql('ALTER TABLE e_post DROP FOREIGN KEY FK_2876D4C15EBAE044');
        $this->addSql('ALTER TABLE e_post DROP FOREIGN KEY FK_2876D4C164D218E');
        $this->addSql('ALTER TABLE e_post_images DROP FOREIGN KEY FK_E9FD01514B89032C');
        $this->addSql('ALTER TABLE e_staff_info DROP FOREIGN KEY FK_EA57DB3BB774EB5F');
        $this->addSql('DROP TABLE e_category');
        $this->addSql('DROP TABLE e_contact_info');
        $this->addSql('DROP TABLE e_customer_avatar');
        $this->addSql('DROP TABLE e_customer_review');
        $this->addSql('DROP TABLE e_avatar_image');
        $this->addSql('DROP TABLE e_location');
        $this->addSql('DROP TABLE e_post');
        $this->addSql('DROP TABLE e_post_images');
        $this->addSql('DROP TABLE e_staff_info');
        $this->addSql('DROP TABLE e_staff_avatar');
        $this->addSql('DROP TABLE fos_user');
    }
}
