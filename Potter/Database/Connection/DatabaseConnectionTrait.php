<?php

namespace Potter\Database\Connection;

use Potter\Connection\ConnectionInterface;

trait DatabaseConnectionTrait
{
    abstract public function createDatabase(string $database): void;

    final public function createDatabaseIfNotExists(string $database): void
    {
        if ($this->databaseExists($database)) {
            return;
        }
        $this->createDatabase($database);
    }

    final public function databaseExists(string $database): bool
    {
        return in_array(
            needle: $database,
            haystack: $this->getDatabases()
        );
    }

    abstract public function getDatabases(bool $refresh = false): array;
}