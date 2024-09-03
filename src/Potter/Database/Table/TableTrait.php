<?php

declare(strict_types=1);

namespace Potter\Database\Table;

use Potter\Database\DatabaseInterface;

trait TableTrait 
{
    final public function tableExists(): bool
    {
        return $this->getDatabase()->tableExists($this->getName());
    }
    
    final public function createTable(ColumnInterface ...$columns): void;
    
    abstract public function getDatabase(): DatabaseInterface;
    abstract public function getName(): string;
}
