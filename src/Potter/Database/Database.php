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
        $flatResult = [];
        foreach ($result as $row) {
            if (count($row) > 1) {
                array_push($flatResult, array_values($row));
                continue;
            }
            array_push($flatResult, array_values($row)[0]);
        }
        return $flatResult;
    }
    
    public function getDatabases(): ResultInterface
    {
        $driver = $this->getDatabaseDriver();
        if ($driver instanceOf MySQLDriverInterface) {
            return new EmptyResult($this->flattenResult($driver->showDatabases($this->getHandle())));
        }
        return new EmptyResult;
    }
}
