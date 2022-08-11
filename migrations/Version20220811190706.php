<?php

declare(strict_types=1);

namespace Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\DBAL\Types\Types;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220811190706 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $email = $schema->createTable("emails");
        $email->addColumn('id', Types::INTEGER)->setAutoincrement(true);
        $email->setPrimaryKey(['id']);
        $email->addColumn("email", Types::STRING)->setNotnull(true);
    }

    public function down(Schema $schema): void
    {
       $schema->dropTable('emails');
    }
}
