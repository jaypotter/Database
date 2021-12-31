<?php

namespace Potter\Database;

use Potter\Database\Connection\DatabaseConnectionInterface;

abstract class AbstractDatabase implements DatabaseInterface
{
    abstract public function getConnection(): DatabaseConnectionInterface;
    
    abstract public function getName(): string;

    abstract public function getTables(bool $refresh = false): array;

    abstract public function refreshTables(): void;

    abstract public function setConnection(DatabaseConnectionInterface $connection): void;

    abstract public function setName(string $name): void;
}