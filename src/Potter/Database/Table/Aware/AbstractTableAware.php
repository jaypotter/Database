<?php

declare(strict_types=1);

namespace Potter\Database\Table\Aware;

use Potter\Database\Table\TableInterface;

abstract class AbstractTableAware implements TableAwareInterface
{
    abstract public function getTable(): TableInterface;
    abstract public function hasTable(): bool;
    abstract protected function setTable(?TableInterface $table = null): ?TableInterface;
    abstract protected function unsetTable(): void;
    abstract public function withTable(?TableInterface $table = null): static;
    abstract public function withoutTable(): static;
}
