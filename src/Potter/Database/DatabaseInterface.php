<?php

declare(strict_types=1);

namespace Potter\Database;

use Potter\Database\Statement\StatementInterface;
use Potter\Database\Driver\Aware\DatabaseDriverAwareInterface;
use Potter\Handle\HandleInterface;

interface DatabaseInterface extends HandleInterface, DatabaseDriverAwareInterface
{
    public function prepare(string $query): StatementInterface;
}
