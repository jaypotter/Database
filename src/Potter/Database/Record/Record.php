<?php

declare(strict_types=1);

namespace Potter\Database\Record;

use Potter\Aware\AwareTrait;
use Potter\Database\Table\{
    TableInterface,
    Aware\TableAwareTrait
};

final class Record extends AbstractRecord
{
    use AwareTrait, RecordArrayTrait, RecordKeyTrait, RecordValuesTrait, TableAwareTrait;
    
    public function __construct(?TableInterface $table = null, ?array $values = null)
    {
        $this->setTable($table);
        $this->setValues($values);
    }
    
    public function insert(): void
    {
        $this->getTable()->insertRecord($this->getValues());
    }
}
