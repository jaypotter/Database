<?php

namespace Potter\Database\Connection\Remote;

use Potter\Connection\Remote\{
    AbstractRemoteConnection,
    RemoteConnectionTrait    
};
use Potter\Database\DatabaseInterface;

abstract class AbstractRemoteDatabaseConnection extends AbstractRemoteConnection implements RemoteDatabaseConnectionInterface
{
    use RemoteConnectionTrait;

    abstract public function createDatabase(string $database): void;

    abstract public function createDatabaseIfNotExists(string $database): void;

    abstract public function databaseExists(string $database): bool;

    abstract public function getDatabase(string $database): DatabaseInterface;

    abstract public function getDatabases(bool $refresh = false): array;

    abstract public function getTables(string $database): array;

    abstract public function refreshDatabases(): void;
}