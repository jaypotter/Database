<?php

namespace Potter\Connection\Database\Remote;

use Potter\Connection\Remote\AbstractRemoteConnection;

abstract class AbstractRemoteDatabaseConnection extends AbstractRemoteConnection implements RemoteDatabaseConnectionInterface
{
    abstract public function databaseExists(string $database): bool;

    abstract public function getDatabases(bool $refresh = false): array;

    abstract public function refreshDatabases(): void;
}