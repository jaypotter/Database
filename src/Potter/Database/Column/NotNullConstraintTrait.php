<?php

declare(strict_types=1);

namespace Potter\Database\Column;

trait NotNullConstraintTrait 
{
    private const string NOT_NULL = 'notNull';
    private bool $notNull = false;
    
    final public function hasNotNullConstraint(): bool
    {
        return $this->get(self::NOT_NULL) === true;
    }
    
    final protected function setNotNullConstraint(bool $notNull = true): bool
    {
        if (!$notNull && $this->hasPrimaryKey()) {
            throw new \Exception;
        }
        return $this->set(self::NOT_NULL, $notNull);
    }
    
    final protected function unsetNotNullConstraint(): void
    {
        $this->setNotNullConstraint(false);
    }
    
    final public function withNotNullConstraint(bool $notNull = true): static
    {
        return $this->with(self::NOT_NULL, $notNull);
    }
    
    final public function withoutNotNullConstraint(): static
    {
        return $this->withNotNullConstraint(false);
    }
    
    abstract public function hasPrimaryKey(): bool;
    
    abstract public function get(string $var): mixed;
    abstract protected function set(string $var, mixed $val): mixed;
    abstract public function with(string $var, mixed $val): static;
}
