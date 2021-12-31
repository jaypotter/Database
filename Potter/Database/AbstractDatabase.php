<?php

namespace Potter\Database;

use Potter\Database\{
    Connection\DatabaseConnectionInterface,
    Table\TableInterface
};

abstract class AbstractDatabase implements DatabaseInterface
{
    abstract public function createTable(string $table): void;

    abstract public function createTableIfNotExists(string $table): void;
    
    abstract public function getConnection(): DatabaseConnectionInterface;
    
    abstract public function getName(): string;

    abstract public function getTable(string $table): TableInterface;

    abstract public function getTables(bool $refresh = false): array;

    abstract public function refreshTables(): void;

    abstract public function setConnection(DatabaseConnectionInterface $connection): void;

    abstract public function setName(string $database): void;

    abstract public function tableExists(string $table): bool;
}