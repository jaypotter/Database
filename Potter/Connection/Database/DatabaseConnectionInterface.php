<?php

namespace Potter\Connection\Database;

use Potter\Connection\ConnectionInterface;

interface DatabaseConnectionInterface extends ConnectionInterface
{
    public function databaseExists(string $database): bool;

    public function getDatabases(bool $refresh = false): array;
}