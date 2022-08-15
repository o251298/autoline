<?php

declare(strict_types=1);

namespace Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\DBAL\Types\Types;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220812055001 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $cars = $schema->createTable("cars");
        $cars->addColumn('id', Types::INTEGER)->setAutoincrement(true);
        $cars->setPrimaryKey(['id']);
        $cars->addColumn("car", Types::STRING)->setNotnull(true);

    }

    public function down(Schema $schema): void
    {
        $schema->dropTable("cars");
    }
}
