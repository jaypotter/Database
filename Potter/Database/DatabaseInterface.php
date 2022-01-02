<?php

namespace Potter\Database;

use Potter\Database\{
    Connection\DatabaseConnectionInterface,
    Table\TableInterface
};
use Potter\Dimension\Parent\ParentDimension;

interface DatabaseInterface extends ParentDimensionInterface
{    
    //public function createTable(TableInterface $table): void;

    //public function createTableIfNotExists(TableInterface $table): void;

    public function getConnection(): DatabaseConnectionInterface;

    //public function getTable(string $table): TableInterface;

    public function getTables(bool $refresh = false): array;

    public function refreshTables(): array;

    public function setConnection(DatabaseConnectionInterface $connection): void;

    public function tableExists(string $table): bool;
}