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
}
