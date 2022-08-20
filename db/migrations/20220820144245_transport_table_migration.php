<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class TransportTableMigration extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change(): void
    {
        $table = $this->table('transports');
        $table->addColumn('category_id', 'integer')
            ->addColumn('name', 'string')
            ->addColumn('description', 'text')
            ->addColumn('speed', 'integer')
            ->addColumn('amount', 'float')
            ->addColumn('color', 'string')
            ->addTimestamps()
            ->addIndex(['name'], ['unique' => false]);
        $table->create();
    }
}
