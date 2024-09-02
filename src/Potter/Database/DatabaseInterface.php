<?php

declare(strict_types=1);

namespace Potter\Database;

use Potter\Database\Driver\Aware\DatabaseDriverAwareInterface;
use Potter\Handle\HandleInterface;
use Potter\Database\{Statement\StatementInterface, Result\ResultInterface};

interface DatabaseInterface extends HandleInterface, DatabaseDriverAwareInterface
{
    public function prepare(string $query): StatementInterface;
    
    public function getCurrentDatabase(): ResultInterface;
    public function isCurrentDatabase(string $database): bool;
    
    
    public function getDatabases(): ResultInterface;
    public function databaseExists(string $database): bool;
    
    public function createDatabase(string $database): void;
    public function useDatabase(string $database): void;
}
