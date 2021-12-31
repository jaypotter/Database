<?php

namespace Potter\Database\Connection;

use Potter\Connection\ConnectionInterface;

trait DatabaseConnectionTrait
{
    final public function databaseExists(string $database): bool
    {
        return in_array(
            needle: $database,
            haystack: $this->getDatabases()
        );
    }

    abstract public function getDatabases(bool $refresh = false): array;
}