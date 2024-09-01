<?php

declare(strict_types=1);

namespace Potter\Database\Driver\Aware;

use Potter\Database\Driver\DatabaseDriverInterface;

abstract class AbstractDatabaseDriverAware 
{
    abstract public function getDatabaseDriver(): DatabaseDriverInterface;
    abstract public function hasDatabaseDriver(): bool;
    abstract protected function setDatabaseDriver(?DatabaseDriverInterface $databaseDriver = null): ?DatabaseDriverInterface;
    abstract protected function unsetDatabaseDriver(): void;
    abstract public function withDatabaseDriver(?DatabaseDriverInterface $databaseDriver = null): static;
    abstract public function withoutDatabaseDriver(): static;
}
