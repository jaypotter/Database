<?php

declare(strict_types=1);

namespace Potter\Database;

use Database\Statement\StatementInterface;
use Potter\Handle\HandleInterface;
use Potter\Driver\Database\Aware\DatabaseDriverAwareInterface;

interface DatabaseInterface extends HandleInterface, DatabaseDriverAwareInterface
{
    public function prepare(string $query): StatementInterface;
}
