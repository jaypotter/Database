<?php

namespace Potter\Database\Table;

use Potter\Database\DatabaseInterface;

interface TableInterface
{
    public function getDatabase(): DatabaseInterface;

    public function getName(): string;

    public function setDatabase(DatabaseInterface $database): void;

    public function setName(string $table): string;
}