<?php

declare(strict_types=1);

namespace Potter\Database\Column\Unique;

interface UniqueConstraintInterface 
{
    public function hasUniqueConstraint(): bool;
    public function withUniqueConstraint(bool $uniqueConstraint = true): static;
    public function withoutUniqueConstraint(): static;
}
