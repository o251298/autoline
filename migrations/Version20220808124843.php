<?php

declare(strict_types=1);

namespace Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\DBAL\Types\Types;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220808124843 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $transport = $schema->createTable('transports');
        $transport->addColumn('id', Types::INTEGER)->setAutoincrement(true);
        $transport->addColumn('category_id', Types::INTEGER);
        $transport->addColumn('name', Types::STRING);
        $transport->addColumn('description', Types::TEXT);
        $transport->addColumn('speed', Types::INTEGER);
        $transport->addColumn('amount', Types::FLOAT);
        $transport->addIndex(['name'], 'name');
        $transport->setPrimaryKey(['id']);
    }

    public function down(Schema $schema): void
    {
        $schema->dropTable('transports');
    }
}
