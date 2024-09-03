<?php

declare(strict_types=1);

namespace Potter\Database\Table;

use Potter\Database\{
    Aware\DatabaseAwareInterface,
    Column\ColumnInterface
};
use Potter\Name\NameInterface;

interface TableInterface extends DatabaseAwareInterface, NameInterface
{
    public function tableExists(): bool;
    public function createTable(ColumnInterface ...$columns): void;
}
