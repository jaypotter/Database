<?php

declare(strict_types=1);

namespace Potter\Database\Statement;

use Potter\{
    Database\Result\ResultInterface,
    Stringable\StringableInterface
};

interface StatementInterface extends StringableInterface
{
    public function execute(mixed ...$vars): void;
    public function getResult(): ResultInterface;
}
