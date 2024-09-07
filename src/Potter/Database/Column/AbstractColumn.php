<?php

declare(strict_types=1);

namespace Potter\Database\Column;

abstract class AbstractColumn implements ColumnInterface
{
    abstract public function getColumnType(): string;
    abstract public function hasColumnType(): bool;
    abstract protected function setColumnType(string $columnType): string;
    abstract protected function unsetColumnType(): void;
    abstract public function withColumnType(string $columnType): static;
    abstract public function withoutColumnType(): static;
    
    abstract public function hasPrimaryKey(): bool;
    abstract protected function setPrimaryKey(bool $primaryKey = true): true;
    abstract protected function unsetPrimaryKey(): void;
    abstract public function withPrimaryKey(bool $primaryKey = true): static;
    abstract public function withoutPrimaryKey(): static;
    
    abstract public function hasUniqueConstraint(): bool;
    abstract protected function setUniqueConstraint(bool $uniqueConstraint = true): true;
    abstract protected function unsetUniqueConstraint(): void;
    abstract public function withUniqueConstraint(bool $uniqueConstraint = true): static;
    abstract public function withoutUniqueConstraint(): static;
}
