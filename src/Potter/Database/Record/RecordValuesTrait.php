<?php

declare(strict_types=1);

namespace Potter\Database\Record;

trait RecordValuesTrait 
{
    private const string VALUES = 'values';
    private array $values;
    
    final public function getValues(): array
    {
        return $this->get(self::VALUES);
    }
    
    final public function hasValues(): bool
    {
        return $this->has(self::VALUES);
    }
    
    final protected function setValues(?array $values = null): ?array
    {
        return $this->set(self::VALUES, $values);
    }
    
    final protected function unsetValues(): void
    {
        $this->unset(self::VALUES);
    }
    
    final public function withValues(?array $values = null): static
    {
        if (is_null($values)) {
            return $this->withoutValues();
        }
        return $this->with(self::VALUES, $values);
    }
    
    final public function withoutValues(): static
    {
        return $this->without(self::VALUES);
    }
    
    abstract public function get(string $var): mixed;
    abstract public function has(string $var): bool;
    abstract protected function set(string $var, mixed $val): mixed;
    abstract protected function unset(string $var): void;
    abstract public function with(string $var, mixed $val): static;
    abstract public function without(string $var): static;
}
