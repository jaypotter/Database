<?php

declare(strict_types=1);

namespace Potter\Database\Record;

trait RecordArrayTrait 
{
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
    
    abstract public function getValues(): array;
    
    abstract public function getKey(string $key): mixed;
    abstract public function hasKey(string $key): bool;
    abstract protected function setKey(string $key, ?mixed $value = null): ?mixed;
    abstract protected function unsetKey(string $key): void;
}
