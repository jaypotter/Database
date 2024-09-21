<?php

declare(strict_types=1);

namespace Potter\Database;

use Potter\Database\{
    Column\ColumnInterface,
    Driver\Aware\DatabaseDriverAwareInterface,
    Result\ResultInterface,
    Statement\StatementInterface
};
use Potter\Database\Table\{
    Common\Aware\CommonTableAwareInterface,
    TableInterface
};
use Potter\Handle\HandleInterface;

interface DatabaseInterface extends CommonTableAwareInterface, HandleInterface, DatabaseDriverAwareInterface
{
    public function prepare(string $query): StatementInterface;
    
    public function getCurrentDatabase(): ResultInterface;    public function isCurrentDatabase(string $database): bool;
    
    public function getDatabases(): ResultInterface;
    public function databaseExists(string $database): bool;
    
    public function createDatabase(string $database): void;
    public function createDatabaseIfNotExists(string $database): void;
    public function deleteDatabase(string $database): void;
    public function useDatabase(string $database): void;
    
    public function getTable(string $table): TableInterface;
    
    public function getTables(): ResultInterface;
    public function tableExists(string $table): bool;
    
    public function createTable(string $table, ColumnInterface ...$columns): void;
    public function deleteTable(string $table): void;
    
    public function insertRecord(string $table, array $values): void;
    public function getLastInsertId(): int;
    public function updateRecords(string $table, array $values, array $criteria = []): void;
    
    public function getRecords(string $table, array $criteria = []): ResultInterface;
}
