<?php

declare(strict_types=1);

namespace Potter\Database\Driver\MySQL;

use Potter\Database\Driver\AbstractDatabaseDriver;
use Potter\Database\Result\ResultInterface;

abstract class AbstractMySQLDriver extends AbstractDatabaseDriver implements MySQLDriverInterface
{
    abstract public function showDatabases(object $handle): ResultInterface;
}
