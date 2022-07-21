<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220721102843 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE categories_sports (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE sports ADD categorie_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE sports ADD CONSTRAINT FK_73C9F91CBCF5E72D FOREIGN KEY (categorie_id) REFERENCES categories_sports (id)');
        $this->addSql('CREATE INDEX IDX_73C9F91CBCF5E72D ON sports (categorie_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE sports DROP FOREIGN KEY FK_73C9F91CBCF5E72D');
        $this->addSql('DROP TABLE categories_sports');
        $this->addSql('DROP INDEX IDX_73C9F91CBCF5E72D ON sports');
        $this->addSql('ALTER TABLE sports DROP categorie_id');
    }
}
