<?php

namespace Potter\Database\Connection\Remote;

use Potter\{
    Connection\Remote\RemoteConnection,
    Database\DatabaseInterface
};

abstract class AbstractRemoteDatabaseConnection extends RemoteConnection implements RemoteDatabaseConnectionInterface
{
    abstract public function createDatabase(DatabaseInterface $database): void;

    abstract public function createDatabaseIfNotExists(DatabaseInterface $database): void;

    abstract public function databaseExists(string $database): bool;

    abstract public function getDatabase(string $database): DatabaseInterface;

    abstract public function getDatabases(bool $refresh = false): array;

    abstract public function getTables(string $database): array;

    abstract public function refreshDatabases(): void;
}