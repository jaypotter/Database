<?php

declare(strict_types=1);

namespace Potter\Database\Column\NotNull;

interface NotNullConstraintInterface 
{
    public function hasNotNullConstraint(): bool;
    public function withNotNullConstraint(bool $notNull = true): static;
    public function withoutNotNullConstraint(): static;
}
