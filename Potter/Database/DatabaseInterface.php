<?php

namespace Potter\Database;

use Potter\Database\{
    Connection\DatabaseConnectionInterface,
    Table\TableInterface
};

interface DatabaseInterface
{
    public function createTable(string $table): void;

    public function createTableIfNotExists(string $table): void;

    public function getConnection(): DatabaseConnectionInterface;

    public function getName(): string;

    public function getTable(string $table): TableInterface;

    public function getTables(bool $refresh = false): array;

    public function refreshTables(): void;

    public function setConnection(DatabaseConnectionInterface $connection): void;

    public function setName(string $database): void;

    public function tableExists(string $table): bool;
}