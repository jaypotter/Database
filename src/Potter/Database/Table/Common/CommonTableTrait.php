<?php

declare(strict_types=1);

namespace Potter\Database\Table\Common;

use Potter\Database\{
    Column\Column,
    Table\TableInterface
};

trait CommonTableTrait
{
    final public function createTableIfNotExists(): void
    {
        $this->getTable()->createTableIfNotExists(
            new Column('Common_Id', 'int', primaryKey: true, autoIncrement: true),
            new Column('Created_At', 'timestamp', notNull: true, columnDefault: 'CURRENT_TIMESTAMP'));
    }
    
    abstract public function getTable(): TableInterface;
}
