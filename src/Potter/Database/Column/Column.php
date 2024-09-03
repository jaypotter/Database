<?php

declare(strict_types=1);

namespace Potter\Database\Column;

use Potter\{
    Aware\AwareTrait,
    Name\NameTrait
};

final class Column extends AbstractColumn
{
    use AwareTrait, ColumnTrait, NameTrait;
    
    private string $type;
    
    public function __construct(string $column, string $columnType)
    {
        $this->setName($column);
        $this->setColumnType($columnType);
    }
}
