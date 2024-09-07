<?php

declare(strict_types=1);

namespace Potter\Database\Column\Default;

interface ColumnDefaultInterface 
{
    public function getColumnDefault(): string;
    public function hasColumnDefault(): bool;
    public function withColumnDefault(?string $columnDefault = null): static;
    public function withoutColumnDefault(): static;
}
