<?php

declare(strict_types=1);

namespace Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\DBAL\Types\Type;
use Doctrine\DBAL\Types\Types;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220806163422 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $cars = $schema->createTable('cars');
        $cars->addColumn('id', Types::INTEGER)->setAutoincrement(true);
        $cars->addColumn('name', Types::STRING);
        $cars->addColumn('coast', Types::FLOAT)->setDefault(100.0);
        $cars->addColumn('speed', Types::INTEGER)->setDefault(200);
        $cars->addColumn('created_at', Types::DATETIME_MUTABLE);
        $cars->setPrimaryKey(['id']);

    }

    public function down(Schema $schema): void
    {
        $schema->dropTable('cars');
    }
}
