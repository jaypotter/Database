<?php

namespace Potter\Database;

trait DatabaseDimensionTrait
{
    final public function childExists(string $childName): bool
    {
        return $this->tableExists($childName);
    }

    final public function getChildren(bool $refresh = false): array
    {
        return $this->getChildren($refresh);
    }

    abstract public function getTables(bool $refresh = false): array;

    final public function refreshChildren(): array
    {
        return $this->refreshTables();
    }

    abstract public function refreshTables(): array;

    abstract public function tableExists(string $table): bool;
}