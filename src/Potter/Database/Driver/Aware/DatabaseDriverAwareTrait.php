<?php

declare(strict_types=1);

namespace Potter\Database\Driver\Aware;

use Potter\Driver\DriverInterface;
use Potter\Database\Driver\DatabaseDriverInterface;

trait DatabaseDriverAwareTrait 
{   
    final public function getDatabaseDriver(): DatabaseDriverInterface
    {
        return $this->getDriver();
    }
    
    final public function hasDatabaseDriver(): bool
    {
        return $this->hasDriver();
    }
    
    final protected function setDatabaseDriver(?DatabaseDriverInterface $databaseDriver = null): ?DatabaseDriverInterface
    {
        return $this->setDriver($databaseDriver);
    }
    
    final protected function unsetDatabaseDriver(): void
    {
        $this->unsetDriver();
    }
    
    final public function withDatabaseDriver(?DatabaseDriverInterface $databaseDriver = null): static
    {
        return $this->withDriver($databaseDriver);
    }
    
    final public function withoutDatabaseDriver(): static
    {
        return $this->withoutDriver();
    }
    
    abstract public function getDriver(): DriverInterface;
    abstract public function hasDriver(): bool;
    abstract protected function setDriver(?DriverInterface $driver = null): ?DriverInterface;
    abstract protected function unsetDriver(): void;
    abstract public function withDriver(?DriverInterface $driver = null): static;
    abstract public function withoutDriver(): static;
}
