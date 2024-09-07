<?php

declare(strict_types=1);

namespace Potter\Database\Column\Primary;

trait PrimaryKeyTrait 
{
    private const string PRIMARY_KEY = 'primaryKey';
    private bool $primaryKey = false;
    
    final public function hasPrimaryKey(): bool
    {
        return $this->get(self::PRIMARY_KEY) === true;
    }
    
    final protected function setPrimaryKey(bool $primaryKey = true): bool
    {
        return $this->set(self::PRIMARY_KEY, $primaryKey);
    }
    
    final protected function unsetPrimaryKey(): void
    {
        $this->setPrimaryKey(false);
    }
    
    final public function withPrimaryKey(bool $primaryKey = true): static
    {
        return $this->with(self::PRIMARY_KEY, $primaryKey);
    }
    
    final public function withoutPrimaryKey(): static
    {
        return $this->withPrimaryKey(false);
    }
    
    abstract public function get(string $var): mixed;
    abstract protected function set(string $var, mixed $val): mixed;
    abstract public function with(string $var, mixed $val): static;
}
