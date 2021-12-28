<?php

namespace Potter\Connection\Database\Local;

use Potter\Connection\Local\AbstractLocalConnection;

abstract class AbstractLocalDatabaseConnection extends AbstractLocalConnection implements LocalDatabaseConnectionInterface
{
    abstract public function databaseExists(string $database): bool;

    abstract public function getDatabases(bool $refresh = false): array;
}