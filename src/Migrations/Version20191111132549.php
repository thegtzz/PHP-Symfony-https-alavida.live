<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191111132549 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE e_staff_avatar (id INT AUTO_INCREMENT NOT NULL, filename VARCHAR(255) NOT NULL, updated TIMESTAMP ON UPDATE CURRENT_TIMESTAMP  DEFAULT CURRENT_TIMESTAMP, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE e_avatar_image CHANGE updated updated TIMESTAMP ON UPDATE CURRENT_TIMESTAMP  DEFAULT CURRENT_TIMESTAMP');
        $this->addSql('ALTER TABLE e_post ADD staff_avatar_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE e_post ADD CONSTRAINT FK_2876D4C1B774EB5F FOREIGN KEY (staff_avatar_id) REFERENCES e_staff_avatar (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_2876D4C1B774EB5F ON e_post (staff_avatar_id)');
        $this->addSql('ALTER TABLE e_post_images CHANGE updated updated TIMESTAMP ON UPDATE CURRENT_TIMESTAMP  DEFAULT CURRENT_TIMESTAMP');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE e_post DROP FOREIGN KEY FK_2876D4C1B774EB5F');
        $this->addSql('DROP TABLE e_staff_avatar');
        $this->addSql('ALTER TABLE e_avatar_image CHANGE updated updated DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL');
        $this->addSql('DROP INDEX UNIQ_2876D4C1B774EB5F ON e_post');
        $this->addSql('ALTER TABLE e_post DROP staff_avatar_id');
        $this->addSql('ALTER TABLE e_post_images CHANGE updated updated DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL');
    }
}
