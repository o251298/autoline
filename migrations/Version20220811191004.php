<?php

declare(strict_types=1);

namespace Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\DBAL\Types\Types;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220811191004 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $users = $schema->createTable("users");
        $users->addColumn('id', Types::INTEGER)->setAutoincrement(true);
        $users->setPrimaryKey(['id']);
        $users->addColumn("username", Types::STRING)->setNotnull(true);

    }

    public function down(Schema $schema): void
    {
        $schema->dropTable("users");
    }
}
