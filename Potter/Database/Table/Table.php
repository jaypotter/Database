<?php

namespace Potter\Database\Table;

use Potter\Database\DatabaseInterface;

final class Table extends AbstractTable
{
    use TableTrait;

    public function __construct(DatabaseInterface $database, string $table)
    {
        $this->setDatabase($database);
        $this->setName($table);
    }
}