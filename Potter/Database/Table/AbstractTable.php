<?php

namespace Potter\Database\Table;

use Potter\Database\DatabaseInterface;

abstract class AbstractTable implements TableInterface
{
    abstract public function getDatabase(): DatabaseInterface;

    abstract public function getName(): string;

    abstract public function setDatabase(DatabaseInterface $database): void;

    abstract public function setName(string $table): string;
}