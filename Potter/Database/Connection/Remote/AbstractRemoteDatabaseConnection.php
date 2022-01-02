<?php

namespace Potter\Database\Connection\Remote;

use Potter\Connection\Remote\RemoteConnection;
use Potter\Database\{
    DatabaseInterface,
    Connection\DatabaseConnectionTrait
};

abstract class AbstractRemoteDatabaseConnection extends RemoteConnection implements RemoteDatabaseConnectionInterface
{
    use DatabaseConnectionTrait;

    abstract public function createDatabase(DatabaseInterface $database): void;

    abstract public function createDatabaseIfNotExists(DatabaseInterface $database): void;

    abstract public function databaseExists(string $database): bool;

    abstract public function getDatabase(string $database): DatabaseInterface;

    abstract public function getDatabases(bool $refresh = false): array;

    abstract public function getTables(string $database): array;

    abstract public function refreshDatabases(): void;
}