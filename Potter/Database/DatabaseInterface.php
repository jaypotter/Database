<?php

namespace Potter\Database;

use Potter\{
    Connection\DatabaseConnectionInterface,
    Dimension\Parent\ParentDimension,
    //Database\Table\TableInterface
};

interface DatabaseInterface extends ParentDimensionInterface
{    
    //public function createTable(TableInterface $table): void;

    //public function createTableIfNotExists(TableInterface $table): void;

    public function getConnection(): DatabaseConnectionInterface;

    //public function getTable(string $table): TableInterface;

    public function getTables(bool $refresh = false): array;

    public function refreshTables(): void;

    public function setConnection(DatabaseConnectionInterface $connection): void;

    public function tableExists(string $table): bool;
}