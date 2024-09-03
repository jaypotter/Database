<?php

declare(strict_types=1);

namespace Potter\Database\Table;

use Potter\Database\Column\ColumnInterface;

abstract class AbstractTable implements TableInterface
{
    abstract public function tableExists(): bool;
    abstract public function createTable(ColumnInterface ...$columns): void;
}
