<?php

declare(strict_types=1);

namespace Potter\Database\Aware;

use Potter\Database\DatabaseInterface;

abstract class AbstractDatabaseAware implements DatabaseAwareInterface
{
    abstract public function getDatabase(): DatabaseInterface;
    abstract public function hasDatabase(): bool;
    abstract protected function setDatabase(DatabaseInterface $database): DatabaseInterface;
    abstract protected function unsetDatabase(): void;
    abstract public function withDatabase(DatabaseInterface $database): static;
    abstract public function withoutDatabase(): static;
}
