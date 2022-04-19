<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211227012548 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE tarifer MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE tarifer DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE tarifer DROP id, CHANGE la_liaison_id la_liaison_id INT NOT NULL, CHANGE le_type_id le_type_id INT NOT NULL');
        $this->addSql('ALTER TABLE tarifer ADD PRIMARY KEY (la_liaison_id, le_type_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE tarifer ADD id INT AUTO_INCREMENT NOT NULL, CHANGE la_liaison_id la_liaison_id INT DEFAULT NULL, CHANGE le_type_id le_type_id INT DEFAULT NULL, DROP PRIMARY KEY, ADD PRIMARY KEY (id)');
    }
}
