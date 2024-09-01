<?php

declare(strict_types=1);

namespace Potter\Database\Statement;

abstract class AbstractStatement implements StatementInterface
{
    abstract public function bind(mixed ...$vars): void;
}
