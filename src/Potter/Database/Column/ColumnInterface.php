<?php

declare(strict_types=1);

namespace Potter\Database\Column;

use Potter\Name\NameInterface;

use Potter\Database\Column\{
    NotNull\NotNullConstraintInterface,
    Primary\PrimaryKeyInterface,
    Type\ColumnTypeInterface,
    Unique\UniqueConstraintInterface
};

interface ColumnInterface extends ColumnTypeInterface, NameInterface, NotNullConstraintInterface, PrimaryKeyInterface, UniqueConstraintInterface
{
   
    public function hasAutoIncrement(): bool;
    public function withAutoIncrement(bool $autoIncrement = true): static;
    public function withoutAutoIncrement(): static;
}
