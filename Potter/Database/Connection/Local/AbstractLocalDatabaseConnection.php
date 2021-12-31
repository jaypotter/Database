<?php

namespace Potter\Database\Connection\Local;

use Potter\{
    Connection\Local\AbstractLocalConnection,
    Database\DatabaseInterface
};

abstract class AbstractLocalDatabaseConnection extends AbstractLocalConnection implements LocalDatabaseConnectionInterface
{
    abstract public function createDatabase(DatabaseInterface $database): void;

    abstract public function createDatabaseIfNotExists(DatabaseInterface $database): void;
    
    abstract public function databaseExists(string $database): bool;

    abstract public function getDatabase(string $database): DatabaseInterface;

    abstract public function getDatabases(bool $refresh = false): array;

    abstract public function getTables(string $database): array;

    abstract public function refreshDatabases(): void;
}