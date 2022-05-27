<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220527182419 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE patisserie CHANGE prix prix INT NOT NULL');
        $this->addSql('ALTER TABLE traiteur CHANGE prix prix INT NOT NULL');
        $this->addSql('ALTER TABLE viennoiserie CHANGE prix prix INT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE patisserie CHANGE prix prix VARCHAR(10) NOT NULL');
        $this->addSql('ALTER TABLE traiteur CHANGE prix prix VARCHAR(10) NOT NULL');
        $this->addSql('ALTER TABLE viennoiserie CHANGE prix prix VARCHAR(10) NOT NULL');
    }
}
