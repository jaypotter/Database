<?php

declare(strict_types=1);

namespace Potter\Database;

use Potter\Database\{
    Column\ColumnInterface,
    Driver\DatabaseDriverInterface,
    Statement\StatementInterface
};
use Potter\Database\Result\{
    ResultInterface,
    EmptyResult
};
use Potter\Database\Table\{
    TableInterface,
    Table
};
use Potter\MySQL\Driver\MySQLDriverInterface;
     
trait DatabaseTrait 
{
    final public function createDatabase(string $database): void
    {
        if ($this->databaseExists($database)) {
            throw new \Exception;
        }
        $driver = $this->getDatabaseDriver();
        if ($driver instanceOf MySQLDriverInterface) {
            $driver->createDatabase($this->getHandle(), $database);
        }
    }
    
    final public function createDatabaseIfNotExists(string $database): void
    {
        if ($this->databaseExists($database)) {
            return;
        }
        $this->createDatabase($database);
    }
    
    final public function createTable(string $table, ColumnInterface ...$columns): void
    {
        if ($this->tableExists($table)) {
            throw new \Exception;
        }
        $driver = $this->getDatabaseDriver();
        if ($driver instanceOf MySQLDriverInterface) {
            $driver->createTable($this->getHandle(), $table, ...$columns);
        }
    }
    
    final public function databaseExists(string $database): bool
    {
        return in_array($database, $this->getDatabases()->toArray());
    }
    
    final public function deleteDatabase(string $database): void
    {
        if (!$this->databaseExists($database)) {
            throw new \Exception;
        }
        $driver = $this->getDatabaseDriver();
        if ($driver instanceOf MySQLDriverInterface) {
            $driver->dropDatabase($this->getHandle(), $database);
        }
    }
    
    final public function deleteTable(string $table): void
    {
        if (!$this->tableExists($table)) {
            throw new \Exception;
        }
        $driver = $this->getDatabaseDriver();
        if ($driver instanceOf MySQLDriverInterface) {
            $driver->dropTable($this->getHandle(), $table);
        }
    }
    
    private function flattenResult(ResultInterface $result): ResultInterface
    {
        $flattenedResult = [];
        foreach ($result as $row) {
            if (count($row) > 1) {
                array_push($flattenedResult, array_values($row));
                continue;
            }
            array_push($flattenedResult, array_values($row)[0]);
        }
        return new EmptyResult($flattenedResult);
    }
    
    final public function getCurrentDatabase(): ResultInterface
    {
        $driver = $this->getDatabaseDriver();
        if ($driver instanceOf MySQLDriverInterface) {
            return $this->flattenResult($driver->selectDatabase($this->getHandle()));
        }
        return new EmptyResult;
    }    
    final public function getDatabases(): ResultInterface
    {
        $driver = $this->getDatabaseDriver();
        if ($driver instanceOf MySQLDriverInterface) {
            return $this->flattenResult($driver->showDatabases($this->getHandle()));
        }
        return new EmptyResult;
    }
    
    final public function getTable(string $table): TableInterface
    {
        return new Table($this, $table);
    }
    
    final public function getTables(): ResultInterface
    {
        $driver = $this->getDatabaseDriver();
        if ($driver instanceOf MySQLDriverInterface) {
            return $this->flattenResult($driver->showTables($this->getHandle()));
        }
        return new EmptyResult;
    }
    
    final public function insertRecord(string $table, array $values): void
    {
        if (!$this->tableExists($table)) {
            throw new \Exception;
        }
        $driver = $this->getDatabaseDriver();
        if ($driver instanceOf MySQLDriverInterface) {
            $driver->insert($this->getHandle(), $table, $values);
        }
    }
    
    final public function getLastInsertId(): int
    {
        return $this->getDatabaseDriver()->getLastInsertId($this->getHandle());
    }
    
    final public function isCurrentDatabase(string $database): bool
    {
        return $database === $this->getCurrentDatabase()->toArray()[0];
    }
    
    final public function prepare(string $query): StatementInterface
    {
        return $this->getDatabaseDriver()->prepare(
            query: $query,
            handle: $this->getHandle());
    }
    
    final public function tableExists(string $table): bool
    {
        return in_array($table, $this->getTables()->toArray());
    }
    
    final public function useDatabase(string $database): void
    {
        if (!$this->databaseExists($database)) {
            throw new \Exception;
        }
        $driver = $this->getDatabaseDriver();
        if ($driver instanceOf MySQLDriverInterface) {
            $driver->use($this->getHandle(), $database);
        }
    }
    
    final public function getRecords(string $table, array $criteria = []): ResultInterface
    {
        if (!$this->tableExists($table)) {
            throw new \Exception;
        }
        $driver = $this->getDatabaseDriver();
        if ($driver instanceOf MySQLDriverInterface) {
            return $driver->select($this->getHandle(), $table, criteria: $criteria);
        }
    }
    
    final public function updateRecords(string $table, array $values, array $criteria = []): void
    {
        if (!$this->tableExists($table)) {
            throw new \Exception;
        }
        $driver = $this->getDatabaseDriver();
        if ($driver instanceOf MySQLDriverInterface) {
            $driver->update($this->getHandle(), $table, $values, $criteria);
        }
    }
    
    abstract public function getDatabaseDriver(): DatabaseDriverInterface;
    abstract public function getHandle(): object;
}
