<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220527182757 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE patisserie ADD image VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE traiteur ADD image VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE viennoiserie ADD image VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE patisserie DROP image');
        $this->addSql('ALTER TABLE traiteur DROP image');
        $this->addSql('ALTER TABLE viennoiserie DROP image');
    }
}
