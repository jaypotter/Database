<?php

declare(strict_types=1);

namespace Potter\Database\Column;

trait UniqueConstraintTrait 
{
    private const string UNIQUE_CONSTRAINT = 'uniqueConstraint';
    private bool $uniqueConstraint = false;
    
    final public function hasUniqueConstraint(): bool
    {
        return $this->hasPrimaryKey() || ($this->get(self::UNIQUE_CONSTRAINT) === true);
    }
    
    final protected function setUniqueConstraint(bool $uniqueConstraint = true): bool
    {
        if (($uniqueConstraint === false) && $this->hasPrimaryKey()) {
            throw new \Exception;
        }
        return $this->set(self::UNIQUE_CONSTRAINT, $uniqueConstraint);
    }
    
    final protected function unsetUniqueConstraint(): void
    {
        $this->setUniqueConstraint(false);
    }
    
    final public function withUniqueConstraint(bool $uniqueConstraint = true): static
    {
        return $this->with(self::UNIQUE_CONSTRAINT, $uniqueConstraint);
    }
    
    final public function withoutUniqueConstraint(): static
    {
        return $this->withUniqueConstraint(false);
    }
    
    abstract public function hasPrimaryKey(): bool;
    
    abstract public function get(string $var): mixed;
    abstract protected function set(string $var, mixed $val): mixed;
    abstract public function with(string $var, mixed $val): static;
}
