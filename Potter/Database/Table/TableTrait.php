<?php

namespace Potter\Database\Table;

use Potter\Database\DatabaseInterface;

trait TableTrait
{
    private DatabaseInterface $database;
    private string $name;

    final public function getDatabase(): DatabaseInterface
    {
        return $this->database;
    }

    final public function getName(): string
    {
        return $this->name;
    }

    final public function setDatabase(DatabaseInterface $database): void
    {
        $this->database = $database;
    }
    
    final public function setName(string $table): string
    {
        $this->name = $table;
    }
}