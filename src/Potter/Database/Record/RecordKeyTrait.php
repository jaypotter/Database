<?php

declare(strict_types=1);

namespace Potter\Database\Record;

trait RecordKeyTrait 
{
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

    abstract public function clone(): static;
    abstract public function getValues(): array;
}
