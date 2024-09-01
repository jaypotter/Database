<?php

declare(strict_types=1);

namespace Potter\Database;

use Potter\Database\{Statement\StatementInterface, Result\ResultInterface};

abstract class AbstractDatabase implements DatabaseInterface
{
    abstract public function prepare(string $query): StatementInterface;
    
    abstract public function getCurrentDatabase(): ResultInterface;
    abstract public function getDatabases(): ResultInterface;
    abstract public function databaseExists(string $database): bool;
}
