<?php

declare(strict_types=1);

namespace Potter\Database\Column;

use Potter\{
    Aware\AwareTrait,
    Name\NameTrait
};

use Potter\Database\Column\{
    Increment\AutoIncrementTrait,
    NotNull\NotNullConstraintTrait,
    Primary\PrimaryKeyTrait,
    Type\ColumnTypeTrait,
    Unique\UniqueConstraintTrait
};

final class Column extends AbstractColumn
{
    use AutoIncrementTrait, AwareTrait, ColumnTypeTrait, NameTrait, NotNullConstraintTrait, PrimaryKeyTrait, UniqueConstraintTrait;
        
    public function __construct(string $column, string $columnType, bool $primaryKey = false, bool $unique = false, bool $notNull = false, bool $autoIncrement = false)
    {
        $this->setName($column);
        $this->setColumnType($columnType);
        $this->setPrimaryKey($primaryKey);
        $this->setUniqueConstraint($primaryKey || $unique);
        $this->setNotNullConstraint($notNull || $this->hasPrimaryKey());
        $this->setAutoIncrement($autoIncrement);
    }
}
