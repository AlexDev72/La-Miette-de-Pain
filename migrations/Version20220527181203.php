<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220527181203 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE patisserie ADD prix VARCHAR(10) NOT NULL');
        $this->addSql('ALTER TABLE traiteur ADD prix VARCHAR(10) NOT NULL');
        $this->addSql('ALTER TABLE viennoiserie ADD prix VARCHAR(10) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE patisserie DROP prix');
        $this->addSql('ALTER TABLE traiteur DROP prix');
        $this->addSql('ALTER TABLE viennoiserie DROP prix');
    }
}
