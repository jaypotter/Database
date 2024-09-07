<?php

declare(strict_types=1);

namespace Potter\Database\Table\Common;

use Potter\Database\Table\Aware\TableAwareInterface;

interface CommonTableInterface extends TableAwareInterface
{
    public function createTableIfNotExists(): void;
}
