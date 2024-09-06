<?php

declare(strict_types=1);

namespace Potter\Database\Table\Aware;

use Potter\Database\Table\TableInterface;

trait TableAwareTrait 
{
    private const string TABLE = 'table';
    private TableInterface $table;
    
    final public function getTable(): TableInterface
    {
        return $this->get(self::TABLE);
    }
    
    final public function hasTable(): bool
    {
        return $this->has(self::TABLE);
    }
    
    final protected function setTable(?TableInterface $table = null): ?TableInterface
    {
        if (is_null($table)) {
            $this->unsetTable();
        }
        return $this->set(self::TABLE, $table);
    }
    
    final protected function unsetTable(): void
    {
        $this->unset(self::TABLE);
    }
    
    final public function withTable(?TableInterface $table = null): static
    {
        if (is_null($table)) {
            return $this->withoutTable();
        }
        return $this->with(self::TABLE, $table);
    }
    
    final public function withoutTable(): static
    {
        return $this->without(self::TABLE);
    }
    
    abstract public function get(string $var): mixed;
    abstract public function has(string $var): bool;
    abstract protected function set(string $var, mixed $val): mixed;
    abstract protected function unset(string $var): void;
    abstract public function with(string $var, mixed $val): static;
    abstract public function without(string $var): static;
}
