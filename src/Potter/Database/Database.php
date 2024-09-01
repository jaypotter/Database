<?php

declare(strict_types=1);

namespace Potter\Database;

use Potter\Aware\AwareTrait;
use Potter\Driver\Aware\DriverAwareTrait;
use Potter\Database\Driver\{DatabaseDriverInterface, Aware\DatabaseDriverAwareTrait, MySQL\MySQLDriverInterface};
use Potter\Database\Statement\StatementInterface;
use Potter\Handle\HandleTrait;
use Potter\Database\Result\{ResultInterface, EmptyResult};

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
   
}
