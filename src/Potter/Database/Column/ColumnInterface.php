<?php

declare(strict_types=1);

namespace Potter\Database\Column;

use Potter\Name\NameInterface;

use Potter\Database\Column\{
    Increment\AutoIncrementInterface,
    NotNull\NotNullConstraintInterface,
    Primary\PrimaryKeyInterface,
    Type\ColumnTypeInterface,
    Unique\UniqueConstraintInterface
};

interface ColumnInterface extends AutoIncrementInterface, ColumnTypeInterface, NameInterface, NotNullConstraintInterface, PrimaryKeyInterface, UniqueConstraintInterface
{
    
}
