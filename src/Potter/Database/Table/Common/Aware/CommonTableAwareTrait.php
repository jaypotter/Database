<?php

declare(strict_types=1);

namespace Potter\Database\Table\Common\Aware;

use Potter\Database\Table\Common\CommonTableInterface;

trait CommonTableAwareTrait 
{
    private const string COMMON_TABLE = 'commonTable';
    private CommonTableInterface $commonTable;
    
    final public function getCommonTable(): CommonTableInterface
    {
        return $this->get(self::COMMON_TABLE);
    }
    
    final public function hasCommonTable(): bool
    {
        return $this->get(self::COMMON_TABLE);
    }
    
    final protected function setCommonTable(?CommonTableInterface $commonTable = null): ?CommonTableInterface
    {
        if (is_null($commonTable)) {
            $this->unsetCommonTable();
            return null;
        }
        return $this->set(self::COMMON_TABLE, $commonTable);
    }
    
    final protected function unsetCommonTable(): void
    {
        $this->unset(self::COMMON_TABLE);
    }
    
    final public function withCommonTable(?CommonTableInterface $commonTable = null): static
    {
        if (is_null($commonTable)) {
            return $this->withoutCommonTable();
        }
        return $this->with(self::COMMON_TABLE, $commonTable);
    }
    
    final public function withoutCommonTable(): static
    {
        return $this->without(self::COMMON_TABLE);
    }
    
    abstract public function get(string $var): mixed;
    abstract public function has(string $var): bool;
    abstract protected function set(string $var, mixed $val): mixed;
    abstract protected function unset(string $var): void;
    abstract public function with(string $var, mixed $val): static;
    abstract public function without(string $var): static;
}
