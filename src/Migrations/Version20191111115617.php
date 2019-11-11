<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191111115617 extends AbstractMigration
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
        $this->addSql('ALTER TABLE e_post ADD youtubeLink LONGTEXT NOT NULL, ADD publicFacilitiesDistance1 LONGTEXT NOT NULL, ADD publicFacilitiesDescription1 LONGTEXT NOT NULL, ADD publicFacilitiesDistance2 LONGTEXT NOT NULL, ADD publicFacilitiesDescription2 LONGTEXT NOT NULL, ADD publicFacilitiesDistance3 LONGTEXT NOT NULL, ADD publicFacilitiesDescription3 LONGTEXT NOT NULL, ADD publicFacilitiesDistance4 LONGTEXT NOT NULL, ADD publicFacilitiesDescription4 LONGTEXT NOT NULL, ADD publicFacilitiesDistance5 LONGTEXT NOT NULL, ADD publicFacilitiesDescription5 LONGTEXT NOT NULL, ADD publicFacilitiesDistance6 LONGTEXT NOT NULL, ADD publicFacilitiesDescription6 LONGTEXT NOT NULL');
        $this->addSql('ALTER TABLE e_post_images CHANGE updated updated TIMESTAMP ON UPDATE CURRENT_TIMESTAMP  DEFAULT CURRENT_TIMESTAMP');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE e_avatar_image CHANGE updated updated DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL');
        $this->addSql('ALTER TABLE e_post DROP youtubeLink, DROP publicFacilitiesDistance1, DROP publicFacilitiesDescription1, DROP publicFacilitiesDistance2, DROP publicFacilitiesDescription2, DROP publicFacilitiesDistance3, DROP publicFacilitiesDescription3, DROP publicFacilitiesDistance4, DROP publicFacilitiesDescription4, DROP publicFacilitiesDistance5, DROP publicFacilitiesDescription5, DROP publicFacilitiesDistance6, DROP publicFacilitiesDescription6');
        $this->addSql('ALTER TABLE e_post_images CHANGE updated updated DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL');
    }
}
