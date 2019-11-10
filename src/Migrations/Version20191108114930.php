<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191108114930 extends AbstractMigration
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
        $this->addSql('ALTER TABLE e_post DROP FOREIGN KEY FK_2876D4C175217B12');
        $this->addSql('DROP INDEX UNIQ_2876D4C175217B12 ON e_post');
        $this->addSql('ALTER TABLE e_post DROP post_images_id');
        $this->addSql('ALTER TABLE e_post_images ADD post_id INT DEFAULT NULL, CHANGE updated updated TIMESTAMP ON UPDATE CURRENT_TIMESTAMP  DEFAULT CURRENT_TIMESTAMP');
        $this->addSql('ALTER TABLE e_post_images ADD CONSTRAINT FK_E9FD01514B89032C FOREIGN KEY (post_id) REFERENCES e_post (id)');
        $this->addSql('CREATE INDEX IDX_E9FD01514B89032C ON e_post_images (post_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE e_avatar_image CHANGE updated updated DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL');
        $this->addSql('ALTER TABLE e_post ADD post_images_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE e_post ADD CONSTRAINT FK_2876D4C175217B12 FOREIGN KEY (post_images_id) REFERENCES e_post_images (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_2876D4C175217B12 ON e_post (post_images_id)');
        $this->addSql('ALTER TABLE e_post_images DROP FOREIGN KEY FK_E9FD01514B89032C');
        $this->addSql('DROP INDEX IDX_E9FD01514B89032C ON e_post_images');
        $this->addSql('ALTER TABLE e_post_images DROP post_id, CHANGE updated updated DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL');
    }
}
