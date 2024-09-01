<?php

declare(strict_types=1);

namespace Potter\Database\Statement;

use Potter\Stringable\StringableInterface;

interface StatementInterface extends StringableInterface
{
    public function bind(mixed ...$vars): void;
}
