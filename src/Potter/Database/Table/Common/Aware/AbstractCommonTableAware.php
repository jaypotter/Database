<?php

declare(strict_types=1);

namespace Potter\Database\Table\Common\Aware;

abstract class AbstractCommonTableAware implements CommonTableAwareInterface
{
    abstract public function getCommonTable(): CommonTableInterface;
    abstract public function hasCommonTable(): bool;
    abstract protected function setCommonTable(?CommonTableInterface $commonTable = null): ?CommonTableInterface;
    abstract protected function unsetCommonTable(): void;
    abstract public function withCommonTable(?CommonTableInterface $commonTable = null): static;
    abstract public function withoutCommonTable(): static;
}
