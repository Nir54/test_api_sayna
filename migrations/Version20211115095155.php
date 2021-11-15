<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211115095155 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE users (users_id INT AUTO_INCREMENT NOT NULL, users_name VARCHAR(255) NOT NULL, users_mail VARCHAR(255) NOT NULL, users_login VARCHAR(255) NOT NULL, users_password VARCHAR(255) NOT NULL, users_token LONGTEXT NOT NULL, users_date_creat DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', users_date_modif DATETIME DEFAULT NULL, PRIMARY KEY(users_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE users');
    }
}
