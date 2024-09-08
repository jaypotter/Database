<?php

declare(strict_types=1);

namespace Potter\Database\Table\Common\Aware;

use Potter\Database\Table\Common\CommonTableInterface;

interface CommonTableAwareInterface 
{
    public function getCommonTable(): CommonTableInterface;
    public function hasCommonTable(): bool;
    public function withCommonTable(?CommonTableInterface $commonTable = null): static;
    public function withoutCommonTable(): static;
}
