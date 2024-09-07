<?php

declare(strict_types=1);

namespace Potter\Database\Column\Increment;

abstract class AbstractAutoIncrement implements AutoIncrementInterface
{
    abstract public function hasAutoIncrement(): bool;
    abstract protected function setAutoIncrement(bool $autoIncrement = true): bool;
    abstract protected function unsetAutoIncrement(): void;
    abstract public function withAutoIncrement(bool $autoIncrement = true): static;
    abstract public function withoutAutoIncrement(): static;
}
