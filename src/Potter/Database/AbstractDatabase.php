<?php

declare(strict_types=1);

namespace Potter\Database;

use Potter\Database\Statement\StatementInterface;

abstract class AbstractDatabase implements DatabaseInterface
{
    abstract public function prepare(string $query): StatementInterface;
}
