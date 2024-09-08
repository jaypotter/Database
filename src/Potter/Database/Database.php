<?php

declare(strict_types=1);

namespace Potter\Database;

use Potter\{
    Aware\AwareTrait,
    Driver\Aware\DriverAwareTrait,
    Handle\HandleTrait
};
use Potter\Database\Driver\{
    DatabaseDriverInterface, 
    Aware\DatabaseDriverAwareTrait
};
use Potter\Database\Table\Table;
use Potter\Database\Table\Common\{
    CommonTableInterface,
    CommonTable,
    Aware\CommonTableAwareTrait
};

final class Database extends AbstractDatabase
{
    use AwareTrait, CommonTableAwareTrait, DatabaseTrait, DatabaseDriverAwareTrait, DriverAwareTrait, HandleTrait;
    
    public function __construct(?object $handle = null, ?DatabaseDriverInterface $databaseDriver = null)
    {
        $this->setHandle($handle);
        $this->setDatabaseDriver($databaseDriver);
        $this->setCommonTable(
            new CommonTable(
                new Table(
                    database: $this, 
                    table: CommonTableInterface::COMMON_TABLE)));
    }
}
