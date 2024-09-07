<?php

declare(strict_types=1);

namespace Potter\Database\Column\Primary;

interface PrimaryKeyInterface 
{
    public function hasPrimaryKey(): bool;
    public function withPrimaryKey(bool $primaryKey = true): static;
    public function withoutPrimaryKey(): static;
}
