<?php

declare(strict_types=1);

namespace Potter\Database;

use Potter\Database\{
    Driver\Aware\DatabaseDriverAwareInterface,
    Result\ResultInterface,
    Statement\StatementInterface,
    Table\TableInterface
};
use Potter\Handle\HandleInterface;

interface DatabaseInterface extends HandleInterface, DatabaseDriverAwareInterface
{
    public function prepare(string $query): StatementInterface;
    
    public function getCurrentDatabase(): ResultInterface;
    public function isCurrentDatabase(string $database): bool;
    
    public function getDatabases(): ResultInterface;
    public function databaseExists(string $database): bool;
    
    public function createDatabase(string $database): void;
    public function deleteDatabase(string $database): void;
    public function useDatabase(string $database): void;
    
    public function getTables(): ResultInterface;
    public function tableExists(string $table): bool;
    
    public function getTable(string $table): TableInterface;
}
