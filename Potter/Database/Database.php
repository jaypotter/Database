<?php

namespace Potter\Database;

use Potter\Database\Table\{
    Table,
    TableInterface
};
use \Exception;

final class Database extends AbstractDatabase
{
    use DatabaseTrait;

    public function getTable(string $table): TableInterface
    {
        if (!$this->tableExists($table))
        {
            throw new Exception;
        }
        return new Table($this, $table);
    }
}