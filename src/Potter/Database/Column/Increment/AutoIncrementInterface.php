<?php

declare(strict_types=1);

namespace Potter\Database\Column\Increment;

interface AutoIncrementInterface 
{
    public function hasAutoIncrement(): bool;
    public function withAutoIncrement(bool $autoIncrement = true): static;
    public function withoutAutoIncrement(): static;
}
