<?php

namespace Potter\Database;

use Potter\Database\{
    Connection\DatabaseConnectionInterface,
    Table\TableInterface
};
use Potter\Dimension\Parent\ParentDimension;

abstract class AbstractDatabase extends ParentDimension implements DatabaseInterface
{
    use DatabaseDimensionTrait;

    //abstract public function createTable(TableInterface $table): void;

    //abstract public function createTableIfNotExists(TableInterface $table): void;
    
    abstract public function getConnection(): DatabaseConnectionInterface;

    //abstract public function getTable(string $table): TableInterface;

    abstract public function getTables(bool $refresh = false): array;

    abstract public function refreshTables(): void;

    abstract public function setConnection(DatabaseConnectionInterface $connection): void;

    abstract public function tableExists(string $table): bool;
}