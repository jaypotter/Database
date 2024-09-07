<?php

declare(strict_types=1);

namespace Potter\Database\Column\Primary;

abstract class AbstractPrimaryKey implements PrimaryKeyInterface
{
    abstract public function hasPrimaryKey(): bool;
    abstract protected function setPrimaryKey(bool $primaryKey = true): bool;
    abstract protected function unsetPrimaryKey(): void;
    abstract public function withPrimaryKey(bool $primaryKey = true): static;
    abstract public function withoutPrimaryKey(): static;
}
