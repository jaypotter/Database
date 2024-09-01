<?php

declare(strict_types=1);

namespace Potter\Database;

use Potter\Aware\AwareTrait;
use Potter\Driver\Aware\DriverAwareTrait;
use Potter\Driver\Database\{DatabaseDriverInterface, Aware\DatabaseDriverAwareTrait};
use Potter\Database\Statement\StatementInterface;
use Potter\Handle\HandleTrait;

final class Database extends AbstractDatabase
{
    use AwareTrait, DriverAwareTrait, DatabaseDriverAwareTrait, HandleTrait;
    
    public function __construct(?object $handle = null, ?DatabaseDriverInterface $databaseDriver = null)
    {
        $this->setHandle($handle);
        $this->setDatabaseDriver($databaseDriver);
    }
    
    public function prepare(string $query): StatementInterface
    {
        return $this->getDatabaseDriver()->prepare(
            query: $query,
            handle: $this->getHandle());
    }
}
