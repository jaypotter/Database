<?php

declare(strict_types=1);

namespace Potter\Database\Table;

use Potter\Database\{
    Column\ColumnInterface,
    DatabaseInterface
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
    
    abstract public function getDatabase(): DatabaseInterface;
    abstract public function getName(): string;
}
