<?php

namespace Potter\Database\Table;

use Potter\{
    Database\DatabaseInterface,
    Dimension\Hybrid\HybridDimensionInterface
};

interface TableInterface extends HybridDimensionInterface
{
    public function getDatabase(): DatabaseInterface;

    public function setDatabase(DatabaseInterface $database): void;
}