<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use App\Entity\Category;
use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191121095732 extends AbstractMigration
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
        $this->addSql('CREATE TABLE e_contact_info (id INT AUTO_INCREMENT NOT NULL, email LONGTEXT DEFAULT NULL, phoneNumber1 LONGTEXT DEFAULT NULL, phoneNumber2 LONGTEXT DEFAULT NULL, phoneNumber3 LONGTEXT DEFAULT NULL, facebook LONGTEXT DEFAULT NULL, instagram LONGTEXT DEFAULT NULL, linkedin LONGTEXT DEFAULT NULL, address LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE e_customer_avatar (id INT AUTO_INCREMENT NOT NULL, filename VARCHAR(255) NOT NULL, updated TIMESTAMP ON UPDATE CURRENT_TIMESTAMP  DEFAULT CURRENT_TIMESTAMP, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE e_customer_review (id INT AUTO_INCREMENT NOT NULL, customer_avatar_id INT DEFAULT NULL, customerShortReviewRu LONGTEXT DEFAULT NULL, customerShortReviewEn LONGTEXT DEFAULT NULL, customerShortReviewPl LONGTEXT DEFAULT NULL, customerShortReviewFr LONGTEXT DEFAULT NULL, customerMainReviewRu LONGTEXT DEFAULT NULL, customerMainReviewEn LONGTEXT DEFAULT NULL, customerMainReviewPl LONGTEXT DEFAULT NULL, customerMainReviewFr LONGTEXT DEFAULT NULL, customerName LONGTEXT DEFAULT NULL, UNIQUE INDEX UNIQ_1742BB112DC5C30A (customer_avatar_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE e_avatar_image (id INT AUTO_INCREMENT NOT NULL, filename VARCHAR(255) NOT NULL, updated TIMESTAMP ON UPDATE CURRENT_TIMESTAMP  DEFAULT CURRENT_TIMESTAMP, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE e_location (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE e_post (id INT AUTO_INCREMENT NOT NULL, location_id INT NOT NULL, category_id INT NOT NULL, image_avatar_id INT DEFAULT NULL, titleRu VARCHAR(255) DEFAULT NULL, titleEn VARCHAR(255) DEFAULT NULL, titlePl VARCHAR(255) DEFAULT NULL, titleFr VARCHAR(255) DEFAULT NULL, statusRu LONGTEXT DEFAULT NULL, statusEn LONGTEXT DEFAULT NULL, statusPl LONGTEXT DEFAULT NULL, statusFr LONGTEXT DEFAULT NULL, propertyTypeRu LONGTEXT DEFAULT NULL, propertyTypeEn LONGTEXT DEFAULT NULL, propertyTypePl LONGTEXT DEFAULT NULL, propertyTypeFr LONGTEXT DEFAULT NULL, contractRu LONGTEXT DEFAULT NULL, contractEn LONGTEXT DEFAULT NULL, contractPl LONGTEXT DEFAULT NULL, contractFr LONGTEXT DEFAULT NULL, price DOUBLE PRECISION DEFAULT NULL, square DOUBLE PRECISION DEFAULT NULL, propertyNameRu LONGTEXT DEFAULT NULL, propertyNameEn LONGTEXT DEFAULT NULL, propertyNamePl LONGTEXT DEFAULT NULL, propertyNameFr LONGTEXT DEFAULT NULL, contactPersonRu LONGTEXT DEFAULT NULL, contactPersonEn LONGTEXT DEFAULT NULL, contactPersonPl LONGTEXT DEFAULT NULL, contactPersonFr LONGTEXT DEFAULT NULL, propertyDescriptionRu LONGTEXT DEFAULT NULL, propertyDescriptionEn LONGTEXT DEFAULT NULL, propertyDescriptionPl LONGTEXT DEFAULT NULL, propertyDescriptionFr LONGTEXT DEFAULT NULL, youtubeLink LONGTEXT DEFAULT NULL, publicFacilitiesDistance1 LONGTEXT DEFAULT NULL, publicFacilitiesDescription1Ru LONGTEXT DEFAULT NULL, publicFacilitiesDescription1En LONGTEXT DEFAULT NULL, publicFacilitiesDescription1Pl LONGTEXT DEFAULT NULL, publicFacilitiesDescription1Fr LONGTEXT DEFAULT NULL, publicFacilitiesDistance2 LONGTEXT DEFAULT NULL, publicFacilitiesDescription2Ru LONGTEXT DEFAULT NULL, publicFacilitiesDescription2En LONGTEXT DEFAULT NULL, publicFacilitiesDescription2Pl LONGTEXT DEFAULT NULL, publicFacilitiesDescription2Fr LONGTEXT DEFAULT NULL, publicFacilitiesDistance3 LONGTEXT DEFAULT NULL, publicFacilitiesDescription3Ru LONGTEXT DEFAULT NULL, publicFacilitiesDescription3En LONGTEXT DEFAULT NULL, publicFacilitiesDescription3Pl LONGTEXT DEFAULT NULL, publicFacilitiesDescription3Fr LONGTEXT DEFAULT NULL, publicFacilitiesDistance4 LONGTEXT DEFAULT NULL, publicFacilitiesDescription4Ru LONGTEXT DEFAULT NULL, publicFacilitiesDescription4En LONGTEXT DEFAULT NULL, publicFacilitiesDescription4Pl LONGTEXT DEFAULT NULL, publicFacilitiesDescription4Fr LONGTEXT DEFAULT NULL, publicFacilitiesDistance5 LONGTEXT DEFAULT NULL, publicFacilitiesDescription5Ru LONGTEXT DEFAULT NULL, publicFacilitiesDescription5En LONGTEXT DEFAULT NULL, publicFacilitiesDescription5Pl LONGTEXT DEFAULT NULL, publicFacilitiesDescription5Fr LONGTEXT DEFAULT NULL, publicFacilitiesDistance6 LONGTEXT DEFAULT NULL, publicFacilitiesDescription6Ru LONGTEXT DEFAULT NULL, publicFacilitiesDescription6En LONGTEXT DEFAULT NULL, publicFacilitiesDescription6Pl LONGTEXT DEFAULT NULL, publicFacilitiesDescription6Fr LONGTEXT DEFAULT NULL, INDEX IDX_2876D4C164D218E (location_id), INDEX IDX_2876D4C112469DE2 (category_id), UNIQUE INDEX UNIQ_2876D4C15EBAE044 (image_avatar_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE e_post_images (id INT AUTO_INCREMENT NOT NULL, post_id INT DEFAULT NULL, filename VARCHAR(255) NOT NULL, updated TIMESTAMP ON UPDATE CURRENT_TIMESTAMP  DEFAULT CURRENT_TIMESTAMP, INDEX IDX_E9FD01514B89032C (post_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE e_staff_info (id INT AUTO_INCREMENT NOT NULL, staff_avatar_id INT DEFAULT NULL, staffNameRu LONGTEXT DEFAULT NULL, staffNameEn LONGTEXT DEFAULT NULL, staffNamePl LONGTEXT DEFAULT NULL, staffNameFr LONGTEXT DEFAULT NULL, staffPositionRu LONGTEXT DEFAULT NULL, staffPositionEn LONGTEXT DEFAULT NULL, staffPositionPl LONGTEXT DEFAULT NULL, staffPositionFr LONGTEXT DEFAULT NULL, staffEmail LONGTEXT DEFAULT NULL, staffPhone LONGTEXT DEFAULT NULL, UNIQUE INDEX UNIQ_EA57DB3BB774EB5F (staff_avatar_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE e_staff_avatar (id INT AUTO_INCREMENT NOT NULL, filename VARCHAR(255) NOT NULL, updated TIMESTAMP ON UPDATE CURRENT_TIMESTAMP  DEFAULT CURRENT_TIMESTAMP, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE e_customer_review ADD CONSTRAINT FK_1742BB112DC5C30A FOREIGN KEY (customer_avatar_id) REFERENCES e_customer_avatar (id)');
        $this->addSql('ALTER TABLE e_post ADD CONSTRAINT FK_2876D4C164D218E FOREIGN KEY (location_id) REFERENCES e_location (id)');
        $this->addSql('ALTER TABLE e_post ADD CONSTRAINT FK_2876D4C112469DE2 FOREIGN KEY (category_id) REFERENCES e_category (id)');
        $this->addSql('ALTER TABLE e_post ADD CONSTRAINT FK_2876D4C15EBAE044 FOREIGN KEY (image_avatar_id) REFERENCES e_avatar_image (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE e_post_images ADD CONSTRAINT FK_E9FD01514B89032C FOREIGN KEY (post_id) REFERENCES e_post (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE e_staff_info ADD CONSTRAINT FK_EA57DB3BB774EB5F FOREIGN KEY (staff_avatar_id) REFERENCES e_staff_avatar (id)');

        foreach (Category::CATEGORIES as $category){
            $this->addSql('INSERT INTO  e_category (name) VALUES (\''.$category.'\')');
        }
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
    }
}
