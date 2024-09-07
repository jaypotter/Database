<?php

declare(strict_types=1);

namespace Potter\Database\Column\NotNull;

abstract class AbstractNotNullConstraint implements NotNullConstraintInterface
{
    abstract public function hasNotNullConstraint(): bool;
    abstract protected function setNotNullConstraint(bool $notNull = true): bool;
    abstract protected function unsetNotNullConstraint(): void;
    abstract public function withNotNullConstraint(bool $notNull = true): static;
    abstract public function withoutNotNullConstraint(): static;
}
