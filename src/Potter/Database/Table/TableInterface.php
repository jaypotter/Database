<?php

declare(strict_types=1);

namespace Potter\Database\Table;

use Potter\Database\{
    Aware\DatabaseAwareInterface,
    Column\ColumnInterface,
    Result\ResultInterface
};
use Potter\Name\NameInterface;

interface TableInterface extends DatabaseAwareInterface, NameInterface
{
    public function tableExists(): bool;
    public function createTable(ColumnInterface ...$columns): void;
    public function createTableIfNotExists(ColumnInterface ...$columns): void;
    public function deleteTable(): void;
    
    public function getRecords(array $criteria = []): ResultInterface;
    public function insertRecord(array $values): void;
}
