<?php

declare(strict_types=1);

namespace Potter\Database\Column;

use Potter\Name\NameInterface;

interface ColumnInterface extends NameInterface
{
    public function getColumnType(): string;
    public function hasColumnType(): bool;
    public function withColumnType(string $type): static;
    public function withoutColumnType(): static;
    
    public function hasNullable(): bool;
    public function withNullable(bool $nullable = true): static;
    public function withoutNullable(): static;
    
    public function hasPrimaryKey(): bool;
    public function withPrimaryKey(bool $primaryKey = true): static;
    public function withoutPrimaryKey(): static;
    
    public function hasUniqueConstraint(): bool;
    public function withUniqueConstraint(bool $uniqueConstraint = true): static;
    public function withoutUniqueConstraint(): static;
}
