<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220528185630 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE patisserie ADD active TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE traiteur ADD active TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE viennoiserie ADD active TINYINT(1) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE patisserie DROP active');
        $this->addSql('ALTER TABLE traiteur DROP active');
        $this->addSql('ALTER TABLE viennoiserie DROP active');
    }
}
