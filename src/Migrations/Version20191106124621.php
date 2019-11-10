<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191106124621 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE e_avatar_image (id INT AUTO_INCREMENT NOT NULL, filename VARCHAR(255) NOT NULL, updated TIMESTAMP ON UPDATE CURRENT_TIMESTAMP  DEFAULT CURRENT_TIMESTAMP, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE e_post ADD image_avatar_id INT DEFAULT NULL, ADD status LONGTEXT NOT NULL, ADD propertyType LONGTEXT NOT NULL, ADD contract LONGTEXT NOT NULL, ADD price LONGTEXT NOT NULL, ADD square LONGTEXT NOT NULL, ADD propertyName LONGTEXT NOT NULL, ADD contactPerson LONGTEXT NOT NULL, ADD propertyDescription LONGTEXT NOT NULL, CHANGE body location LONGTEXT NOT NULL');
        $this->addSql('ALTER TABLE e_post ADD CONSTRAINT FK_2876D4C15EBAE044 FOREIGN KEY (image_avatar_id) REFERENCES e_avatar_image (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_2876D4C15EBAE044 ON e_post (image_avatar_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE e_post DROP FOREIGN KEY FK_2876D4C15EBAE044');
        $this->addSql('DROP TABLE e_avatar_image');
        $this->addSql('DROP INDEX UNIQ_2876D4C15EBAE044 ON e_post');
        $this->addSql('ALTER TABLE e_post ADD body LONGTEXT NOT NULL COLLATE utf8mb4_unicode_ci, DROP image_avatar_id, DROP location, DROP status, DROP propertyType, DROP contract, DROP price, DROP square, DROP propertyName, DROP contactPerson, DROP propertyDescription');
    }
}
