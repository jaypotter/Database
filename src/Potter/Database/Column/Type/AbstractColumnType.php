<?php

declare(strict_types=1);

namespace Potter\Database\Column\Type;

abstract class AbstractColumnType implements ColumnTypeInterface
{
    abstract public function getColumnType(): string;
    abstract public function hasColumnType(): bool;
    abstract protected function setColumnType(string $columnType): string;
    abstract protected function unsetColumnType(): void;
    abstract public function withColumnType(string $columnType): static;
    abstract public function withoutColumnType(): static;
}
