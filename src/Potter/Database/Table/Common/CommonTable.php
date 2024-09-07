<?php

declare(strict_types=1);

namespace Potter\Database\Table\Common;

use Potter\Aware\AwareTrait;
use Potter\Database\Table\{
    Aware\TableAwareTrait,
    TableInterface
};

final class CommonTable extends AbstractCommonTable
{
    use AwareTrait, CommonTableTrait, TableAwareTrait;
    
    public function __construct(?TableInterface $table = null)
    {
        $this->setTable($table);
        $this->createTableIfNotExists();
    }
}
