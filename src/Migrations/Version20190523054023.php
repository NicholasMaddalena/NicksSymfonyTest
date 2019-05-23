<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190523054023 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        //create the session table for db sessions.
        $this->addSql('CREATE TABLE `sessions` (`sess_id` VARCHAR(128) NOT NULL PRIMARY KEY,`sess_data` BLOB NOT NULL,`sess_time` INTEGER UNSIGNED NOT NULL,`sess_lifetime` MEDIUMINT NOT NULL) COLLATE utf8_bin, ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        //Drop the sessions table
        $this->addSql('DROP TABLE sessions');
    }
}
