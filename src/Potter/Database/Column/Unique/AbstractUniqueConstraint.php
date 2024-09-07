<?php

declare(strict_types=1);

namespace Potter\Database\Column\Unique;

abstract class AbstractUniqueConstraint implements UniqueConstraintInterface
{
    abstract public function hasUniqueConstraint(): bool;
    abstract protected function setUniqueConstraint(bool $uniqueConstraint = true): bool;
    abstract protected function unsetUniqueConstraint(): void;
    abstract public function withUniqueConstraint(bool $uniqueConstraint = true): static;
    abstract public function withoutUniqueConstraint(): static;
}
