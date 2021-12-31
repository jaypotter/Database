<?php

namespace Potter\Database;

use Potter\Database\Connection\DatabaseConnectionInterface;

interface DatabaseInterface
{
    public function getConnection(): DatabaseConnectionInterface;

    public function getName(): string;

    public function getTables(): array;

    public function setConnection(DatabaseConnectionInterface $connection): void;

    public function setName(string $name): void;
}