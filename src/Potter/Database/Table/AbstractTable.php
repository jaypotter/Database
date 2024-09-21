<?php

declare(strict_types=1);

namespace Potter\Database\Table;

use Potter\Database\{
    Column\ColumnInterface,
    Result\ResultInterface
};

abstract class AbstractTable implements TableInterface
{
    abstract public function tableExists(): bool;
    abstract public function createTable(ColumnInterface ...$columns): void;
    abstract public function createTableIfNotExists(ColumnInterface ...$columns): void;
    abstract public function deleteTable(): void;
    
    abstract public function getRecords(array $criteria = []): ResultInterface;
    abstract public function insertRecord(array $values): void;
    abstract public function updateRecords(array $values, array $criteria = []): void;
}
