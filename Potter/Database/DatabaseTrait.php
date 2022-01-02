<?php

namespace Potter\Database;

use Potter\Database\{
    Connection\DatabaseConnectionInterface,
    Table\TableInterface
};

trait DatabaseTrait
{
    private DatabaseConnectionInterface $connection;
    private array $tables;

    //abstract public function createTable(TableInterface $table): void;

    /*
    final public function createTableIfNotExists(TableInterface $table): void
    {
        if ($this->tableExists($table->getName())) {
            return;
        }
        $this->createTable($table);
    }
    */

    final public function getConnection(): DatabaseConnectionInterface
    {
        return $this->connection;
    }

    abstract public function getName(): string;

    final public function exists(): bool
    {
        return $this->connection->databaseExists($this->getName());
    }

    final public function getTables(bool $refresh = false): array
    {
        $refresh = $refresh || !isset($this->tables);
        return $refresh ? $this->refreshTables() : $this->tables;
    }

    final public function refreshTables(): array
    {
        return $this->tables = $this->connection->getTables($this->name);
    }

    final public function setConnection(DatabaseConnectionInterface $connection): void
    {
        $this->connection = $connection;
    }

    final public function tableExists(string $table): bool
    {
        return in_array(
            needle: $table,
            haystack: $this->getTables()
        );
    }
}