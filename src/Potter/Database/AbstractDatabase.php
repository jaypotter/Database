<?php

declare(strict_types=1);

namespace Potter\Database;

use Potter\Database\{
    Statement\StatementInterface, 
    Result\ResultInterface
};

abstract class AbstractDatabase implements DatabaseInterface
{
    abstract public function prepare(string $query): StatementInterface;
    
    abstract public function getCurrentDatabase(): ResultInterface;
    abstract public function isCurrentDatabase(string $database): bool;
    
    abstract public function getDatabases(): ResultInterface;
    abstract public function databaseExists(string $database): bool;
    
    abstract public function createDatabase(string $database): void;
    abstract public function deleteDatabase(string $database): void;
    abstract public function useDatabase(string $database): void;
    
    abstract public function getTables(): ResultInterface;
    abstract public function tableExists(string $table): bool;
}
