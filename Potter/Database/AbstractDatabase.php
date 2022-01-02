<?php

namespace Potter\Database;

use Potter\Database\{
    Connection\DatabaseConnectionInterface,
    Table\TableInterface
};
use Potter\Dimension\Parent\ParentDimension;

abstract class AbstractDatabase implements DatabaseInterface
{
    final public function create(): void
    {
        $this->getConnection()->createDatabase($this);
    }

    abstract public function createTable(TableInterface $table): void;

    abstract public function createTableIfNotExists(TableInterface $table): void;

    abstract public function exists(): bool;
    
    abstract public function getConnection(): DatabaseConnectionInterface;
    
    abstract public function getName(): string;

    abstract public function getTable(string $table): TableInterface;

    abstract public function getTables(bool $refresh = false): array;

    abstract public function refreshTables(): void;

    abstract public function setConnection(DatabaseConnectionInterface $connection): void;

    abstract public function setName(string $database): void;

    abstract public function tableExists(string $table): bool;
}