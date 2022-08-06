<?php

declare(strict_types=1);

namespace Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\DBAL\Types\Types;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220806164520 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $invoices = $schema->createTable('invoices');
        $invoices->addColumn('id', Types::INTEGER)->setAutoincrement(true);
        $invoices->addColumn('cars_id', Types::INTEGER)->setNotnull(true);
        $invoices->addColumn('created_at', Types::DATETIME_MUTABLE);
        $invoices->setPrimaryKey(['id']);
        $invoices->addForeignKeyConstraint('cars', ['cars_id'], ['id']);
    }

    public function down(Schema $schema): void
    {
        $schema->dropTable('invoices');
    }
}
