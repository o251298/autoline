<?php

declare(strict_types=1);

namespace Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\DBAL\Types\Types;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220812054927 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $invoices = $schema->createTable("invoices");
        $invoices->addColumn('id', Types::INTEGER)->setAutoincrement(true);
        $invoices->setPrimaryKey(['id']);
        $invoices->addColumn("invoice", Types::STRING)->setNotnull(true);

    }

    public function down(Schema $schema): void
    {
        $schema->dropTable("invoices");
    }
}
