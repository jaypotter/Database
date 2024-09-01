<?php

declare(strict_types=1);

namespace Potter\Database\Driver\Aware;

use Potter\Database\Driver\DatabaseDriverInterface;

interface DatabaseDriverAwareInterface 
{
    public function getDatabaseDriver(): DatabaseDriverInterface;
    public function hasDatabaseDriver(): bool;
    public function withDatabaseDriver(?DatabaseDriverInterface $databaseDriver = null): static;
    public function withoutDatabaseDriver(): static;
}
