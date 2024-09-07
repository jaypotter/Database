<?php

declare(strict_types=1);

namespace Potter\Database\Column\Default;

abstract class AbstractColumnDefault implements ColumnDefaultInterface
{
    abstract public function getColumnDefault(): string;
    abstract public function hasColumnDefault(): bool;
    abstract protected function setColumnDefault(?string $columnDefault = null): ?string;
    abstract protected function unsetColumnDefault(): void;
    abstract public function withColumnDefault(?string $columnDefault = null): static;
    abstract public function withoutColumnDefault(): static;
}
