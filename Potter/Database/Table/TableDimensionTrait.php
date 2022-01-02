<?php

namespace Potter\Database\Table;

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