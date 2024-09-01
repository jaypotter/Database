<?php

declare(strict_types=1);

namespace Potter\Database;

use Potter\Database\Driver\Aware\DatabaseDriverAwareInterface;
use Potter\Handle\HandleInterface;
use Potter\Database\{Statement\StatementInterface, Result\ResultInterface};

interface DatabaseInterface extends HandleInterface, DatabaseDriverAwareInterface
{
    public function prepare(string $query): StatementInterface;
    
    public function getDatabases(): ResultInterface;
}
