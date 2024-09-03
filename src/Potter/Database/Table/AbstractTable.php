<?php

declare(strict_types=1);

namespace Potter\Database\Table;

abstract class AbstractTable implements TableInterface
{
    abstract public function tableExists(): bool;
}
