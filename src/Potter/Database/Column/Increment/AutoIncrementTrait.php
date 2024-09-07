<?php

declare(strict_types=1);

namespace Potter\Database\Column\Increment;

trait AutoIncrementTrait 
{
    private const string AUTO_INCREMENT = 'autoIncrement';
    private bool $autoIncrement = false;
    
    final public function hasAutoIncrement(): bool
    {
        return $this->get(self::AUTO_INCREMENT) === true;
    }
    
    final protected function setAutoIncrement(bool $autoIncrement = true): bool
    {
        return $this->set(self::AUTO_INCREMENT, $autoIncrement);
    }
    
    final protected function unsetAutoIncrement(): void
    {
        $this->setAutoIncrement(false);
    }
    
    final public function withAutoIncrement(bool $autoIncrement = true): static
    {
        return $this->with(self::AUTO_INCREMENT, $autoIncrement);
    }
    
    final public function withoutAutoIncrement(): static
    {
        return $this->withAutoIncrement(false);
    }
    
    abstract public function get(string $var): mixed;
    abstract protected function set(string $var, mixed $val): mixed;
    abstract public function with(string $var, mixed $val): static;
}
