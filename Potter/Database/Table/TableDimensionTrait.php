<?php

namespace Potter\Database\Table;

use Potter\Database\DatabaseInterface;

use Potter\Dimension\{
    Parent\ParentDimensionInterface,
};

trait TableDimensionTrait
{
    final public function getDatabase(): DatabaseInterface
    {
        /** @var DatabaseInterface $parent */
        $parent = $this->getParent();
        return $parent;
    }

    abstract public function getParent(): ParentDimensionInterface;

    final public function setDatabase(DatabaseInterface $database): void
    {
        $this->setParent($database);
    }

    abstract public function setParent(ParentDimensionInterface $parentDimension): void;
}