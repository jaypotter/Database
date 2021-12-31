<?php

namespace Potter\Database\Connection;

use Potter\{
    Connection\ConnectionInterface,
    Database\DatabaseInterface
};

interface DatabaseConnectionInterface extends ConnectionInterface
{
    public function createDatabase(string $database): void;

    public function createDatabaseIfNotExists(string $database): void;

    public function databaseExists(string $database): bool;

    public function getDatabase(string $database): DatabaseInterface;

    public function getDatabases(bool $refresh = false): array;

    public function getTables(string $database): array;

    public function refreshDatabases(): void;
}