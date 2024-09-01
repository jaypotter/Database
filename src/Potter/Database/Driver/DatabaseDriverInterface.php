<?php

declare(strict_types=1);

namespace Potter\Database\Driver;

use Potter\Database\Statement\StatementInterface;
use Potter\Driver\DriverInterface;

interface DatabaseDriverInterface extends DriverInterface
{
    public function prepare(string $query, object $handle): StatementInterface;
}