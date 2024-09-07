<?php

declare(strict_types=1);

namespace Potter\Database\Column;

use Potter\Name\NameInterface;

interface ColumnInterface extends NameInterface
{
    
    public function hasNotNullConstraint(): bool;
    public function withNotNullConstraint(bool $notNull = true): static;
    public function withoutNotNullConstraint(): static;
    
    
    
    public function hasUniqueConstraint(): bool;
    public function withUniqueConstraint(bool $uniqueConstraint = true): static;
    public function withoutUniqueConstraint(): static;
    
    public function hasAutoIncrement(): bool;
    public function withAutoIncrement(bool $autoIncrement = true): static;
    public function withoutAutoIncrement(): static;
}
