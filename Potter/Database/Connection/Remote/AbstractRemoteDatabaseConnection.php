<?php

namespace Potter\Database\Connection\Remote;

use Potter\{
    Connection\Remote\AbstractRemoteConnection,
    Database\DatabaseInterface
};

abstract class AbstractRemoteDatabaseConnection extends AbstractRemoteConnection implements RemoteDatabaseConnectionInterface
{
    abstract public function databaseExists(string $database): bool;

    abstract public function getDatabase(string $database): DatabaseInterface;

    abstract public function getDatabases(bool $refresh = false): array;

    abstract public function getTables(string $database): array;

    abstract public function refreshDatabases(): void;
}