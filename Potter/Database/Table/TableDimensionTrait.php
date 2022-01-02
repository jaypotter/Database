<?php

namespace Potter\Database\Table;

use Potter\Database\DatabaseInterface;

trait TableDimensionTrait
{
    final public function getDatabase(): DatabaseInterface
    {
        return $this->getParent();
    }

    final public function setDatabase(DatabaseInterface $database): void
    {
        $this->setParent($database);
    }
}