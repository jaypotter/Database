<?php

namespace Potter\Database;

use Potter\Database\Connection\DatabaseConnectionInterface;

trait DatabaseTrait
{
    private DatabaseConnectionInterface $connection;
    private string $name;
    private array $tables;

    final public function getConnection(): DatabaseConnectionInterface
    {
        return $this->connection;
    }

    final public function getName(): string
    {
        return $this->name;
    }

    final public function getTables(bool $refresh = false): array
    {
        if ($refresh||!isset($this->tables)) {
            $this->refreshTables();
        }
        return $this->tables;
    }

    final public function refreshTables(): void
    {
        $this->tables = $this->connection->getTables($this->name);
    }

    final public function setConnection(DatabaseConnectionInterface $connection): void
    {
        $this->connection = $connection;
    }

    final public function setName(string $name): void
    {
        $this->name = $name;
    }

    final public function tableExists(string $table): bool
    {
        return in_array(
            needle: $table,
            haystack: $this->getTables()
        );
    }
}