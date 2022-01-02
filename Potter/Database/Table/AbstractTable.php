<?php

namespace Potter\Database\Table;

use Potter\{
    Database\DatabaseInterface,
    Dimension\Hybrid\HybridDimension
};

abstract class AbstractTable extends HybridDimension implements TableInterface
{
    abstract public function getDatabase(): DatabaseInterface;

    abstract public function setDatabase(DatabaseInterface $database): void;
}