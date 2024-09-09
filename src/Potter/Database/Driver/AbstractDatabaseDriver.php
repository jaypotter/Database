<?php

declare(strict_types=1);

namespace Potter\Database\Driver;

use Potter\{
    Database\Statement\StatementInterface,
    Driver\AbstractDriver
};

abstract class AbstractDatabaseDriver extends AbstractDriver implements DatabaseDriverInterface
{
    abstract public function prepare(string $query, object $handle): StatementInterface;
    
    abstract public function getLastInsertId(object $handle): int;
}
