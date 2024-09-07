<?php

declare(strict_types=1);

namespace Potter\Database\Record;

trait RecordTrait 
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
    
    final public function getKey(string $key): mixed
    {
        return $this->getValues()[$key];
    }
    
    final public function hasKey(string $key): bool
    {
        return array_key_exists($key, $this->getValues());
    }
    
    final protected function setKey(string $key, ?mixed $value = null): ?mixed
    {
        if (is_null($value)) {
            $this->unsetKey($key);
            return null;
        }
        $values = $this->getValues();
        $values[$key] = $value;
        return $this->setValues($values);
    }
    
    final protected function unsetKey(string $key): void
    {
        $values = $this->getValues();
        unset($values[$key]);
        $this->setValues($this->$values);
    }
    
    final public function withKey(string $key, ?mixed $value = null): static
    {
        $clone = $this->clone();
        $clone->setKey($key, $value);
        return $clone;
    }
    
    final public function withoutKey(string $key): static
    {
        $clone = $this->clone();
        $clone->unsetKey($key);
        return $clone;
    }
    
    final public function offsetExists(mixed $offset): bool
    {
        return $this->hasKey($offset);
    }
    
    final public function offsetGet(mixed $offset): mixed
    {
        return $this->getKey($offset);
    }
    
    final public function offsetSet(mixed $offset, mixed $value): void
    {
        $this->setKey($offset, $value);
    }
    
    final public function offsetUnset(mixed $offset): void
    {
        $this->unsetKey($offset);
    }
    
    final public function toArray(): array
    {
        return $this->getValues();
    }
    
    abstract public function clone(): static;
    abstract public function get(string $var): mixed;
    abstract public function has(string $var): bool;
    abstract protected function set(string $var, mixed $val): mixed;
    abstract protected function unset(string $var): void;
    abstract public function with(string $var, mixed $val): static;
    abstract public function without(string $var): static;
}
