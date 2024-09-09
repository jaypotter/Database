<?php

declare(strict_types=1);

namespace Potter\Database\Statement;

use Potter\Database\Result\ResultInterface;

abstract class AbstractStatement implements StatementInterface
{
    abstract public function execute(array $vars = []): void;
    abstract public function getResult(): ResultInterface;
}
