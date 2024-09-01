<?php

declare(strict_types=1);

namespace Potter\Database\Driver;

use Potter\Database\Statement\StatementInterface;

abstract class AbstractDatabaseDriver implements DatabaseDriverInterface
{
    abstract public function prepare(string $query, object $handle): StatementInterface;
}
