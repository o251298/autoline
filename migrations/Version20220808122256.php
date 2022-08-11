<?php

declare(strict_types=1);

namespace Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\DBAL\Types\Types;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220808122256 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $category = $schema->createTable('categories');
        $category->addColumn('id', Types::INTEGER)->setAutoincrement(true);
        $category->addColumn('name', Types::STRING);
        $category->addColumn('description', Types::TEXT);
        $category->setPrimaryKey(['id']);
        $category->addIndex(['name'], 'name');
    }

    public function down(Schema $schema): void
    {
        $schema->dropTable('categories');
    }
}
