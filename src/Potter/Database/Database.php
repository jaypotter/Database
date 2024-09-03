<?php

declare(strict_types=1);

namespace Potter\Database;

use Potter\{
    Aware\AwareTrait,
    Database\Statement\StatementInterface,
    Driver\Aware\DriverAwareTrait,
    Handle\HandleTrait,
    MySQL\Driver\MySQLDriverInterface
};
use Potter\Database\Driver\{
    DatabaseDriverInterface, 
    Aware\DatabaseDriverAwareTrait
};
use Potter\Database\Result\{
    ResultInterface, 
    EmptyResult
};
use Potter\Database\Table\{
    TableInterface,
    Table
};

final class Database extends AbstractDatabase
{
    use AwareTrait, DriverAwareTrait, DatabaseDriverAwareTrait, HandleTrait;
    
    public function __construct(?object $handle = null, ?DatabaseDriverInterface $databaseDriver = null)
    {
        $this->setHandle($handle);
        $this->setDatabaseDriver($databaseDriver);
    }
        
    public function prepare(string $query): StatementInterface
    {
        return $this->getDatabaseDriver()->prepare(
            query: $query,
            handle: $this->getHandle());
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
    
    public function getCurrentDatabase(): ResultInterface
    {
        $driver = $this->getDatabaseDriver();
        if ($driver instanceOf MySQLDriverInterface) {
            return $this->flattenResult($driver->selectDatabase($this->getHandle()));
        }
        return new EmptyResult;
    }
    
    public function isCurrentDatabase(string $database): bool
    {
        return $database === $this->getCurrentDatabase()->toArray()[0];
    }
    
    public function getDatabases(): ResultInterface
    {
        $driver = $this->getDatabaseDriver();
        if ($driver instanceOf MySQLDriverInterface) {
            return $this->flattenResult($driver->showDatabases($this->getHandle()));
        }
        return new EmptyResult;
    }
    
    public function databaseExists(string $database): bool
    {
        return in_array($database, $this->getDatabases()->toArray());
    }
    
    public function createDatabase(string $database): void
    {
        if ($this->databaseExists($database)) {
            throw new \Exception;
        }
        $driver = $this->getDatabaseDriver();
        if ($driver instanceOf MySQLDriverInterface) {
            $driver->createDatabase($this->getHandle(), $database);
        }
    }
    
    public function deleteDatabase(string $database): void
    {
        if (!$this->databaseExists($database)) {
            throw new \Exception;
        }
        $driver = $this->getDatabaseDriver();
        if ($driver instanceOf MySQLDriverInterface) {
            $driver->dropDatabase($this->getHandle(), $database);
        }
    }
       
    public function useDatabase(string $database): void
    {
        if (!$this->databaseExists($database)) {
            throw new \Exception;
        }
        $driver = $this->getDatabaseDriver();
        if ($driver instanceOf MySQLDriverInterface) {
            $driver->use($this->getHandle(), $database);
        }
    }
    
    final public function getTables(): ResultInterface
    {
        $driver = $this->getDatabaseDriver();
        if ($driver instanceOf MySQLDriverInterface) {
            return $this->flattenResult($driver->showTables($this->getHandle()));
        }
        return new EmptyResult;
    }
    
    public function tableExists(string $table): bool
    {
        return in_array($table, $this->getTables()->toArray());
    }
    
    public function getTable(string $table): TableInterface
    {
        return new Table($this, $table);
    }
}
