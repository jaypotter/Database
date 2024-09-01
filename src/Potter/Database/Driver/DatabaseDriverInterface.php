<?php

declare(strict_types=1);

namespace Potter\Database\Driver;

use Potter\Driver\DriverInterface;
use Potter\Database\Statement\StatementInterface;

interface DatabaseDriverInterface extends DriverInterface
{
    public function prepare(string $query, object $handle): StatementInterface;
}
