<?php

declare(strict_types=1);

namespace Potter\Database\Table;

use Potter\Database\{
    DatabaseInterface,
    Column\ColumnInterface,
    Result\ResultInterface
};

trait TableTrait 
{    
    final public function tableExists(): bool
    {
        return $this->getDatabase()->tableExists($this->getName());
    }
    
    final public function createTable(ColumnInterface ...$columns): void
    {
        $this->getDatabase()->createTable($this->getName(), ...$columns);
    }
    
    final public function createTableIfNotExists(ColumnInterface ...$columns): void
    {
        if ($this->tableExists()) {
            return;
        }
        $this->createTable(...$columns);
    }
    
    final public function deleteTable(): void
    {
        if (!$this->tableExists()) {
            return;
        }
        $this->getDatabase()->deleteTable($this->getName());
    }
    
    final public function insertRecord(array $values): void
    {
        $this->getDatabase()->insertRecord($this->getName(), $values);
    }
    
    final public function getRecords(array $criteria = []): ResultInterface
    {
        return $this->getDatabase()->getRecords($this->getName(), $criteria);
    }
    
    final public function updateRecords(array $values, array $criteria = []): void
    {
        $this->getDatabase()->updateRecords($this->getName(), $values, $criteria);
    }
    
    abstract public function getDatabase(): DatabaseInterface;
    abstract public function getName(): string;
}
