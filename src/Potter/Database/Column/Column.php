<?php

declare(strict_types=1);

namespace Potter\Database\Column;

use Potter\{
    Aware\AwareTrait,
    Name\NameTrait
};

final class Column extends AbstractColumn
{
    use AwareTrait, ColumnTrait, ColumnTypeTrait, NameTrait, NotNullConstraintTrait, PrimaryKeyTrait, UniqueConstraintTrait;
        
    public function __construct(string $column, string $columnType, bool $primaryKey = false, bool $unique = false, bool $nullable = false)
    {
        $this->setName($column);
        $this->setColumnType($columnType);
        $this->setPrimaryKey($primaryKey);
        $this->setUniqueConstraint($primaryKey || $unique);
        if ($this->hasPrimaryKey()) {
            $nullable = false;
        }
        $this->setNullable($nullable);
    }
}
