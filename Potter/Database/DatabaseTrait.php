<?php

namespace Potter\Database;

use Potter\Database\Connection\DatabaseConnectionInterface;

trait DatabaseTrait
{
    private DatabaseConnectionInterface $connection;
    private string $name;

    final public function getConnection(): DatabaseConnectionInterface
    {
        return $this->connection;
    }

    final public function getName(): string
    {
        return $this->name;
    }

    final public function getTables(): array
    {
        return $this->connection->getTables($this->name);
    }

    final public function setConnection(DatabaseConnectionInterface $connection): void
    {
        $this->connection = $connection;
    }

    final public function setName(string $name): void
    {
        $this->name = $name;
    }
}