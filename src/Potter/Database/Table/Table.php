<?php

declare(strict_types=1);

namespace Potter\Database\Table;

use Potter\{
    Aware\AwareTrait,
    Name\NameTrait
};
use Potter\Database\{
    Aware\DatabaseAwareTrait,
    DatabaseInterface
};

final class Table extends AbstractTable
{
    use AwareTrait, DatabaseAwareTrait, NameTrait, TableTrait;
    
    public function __construct(DatabaseInterface $database, string $table)
    {
        $this->setDatabase($database);
        $this->setName($table);
    }
}
