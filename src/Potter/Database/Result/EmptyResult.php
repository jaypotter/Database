<?php

declare(strict_types=1);

namespace Potter\Database\Result;

use Potter\ArrayAccess\Numbered\NumberedArrayTrait;

final class EmptyResult extends AbstractResult
{
    use NumberedArrayTrait;
    
    public function __construct(private array $result = [])
    { }
    
    public function getLength(): int
    {
        return count($this->result);
    }
    
    public function offsetExists(mixed $offset): bool
    {
        return array_key_exists($offset, $this->result);
    }
    
    public function offsetGet(mixed $offset): mixed
    {
        return $this->result[$offset];
    }
    
    public function offsetSet(mixed $offset, mixed $value): void
    {
        $this->result[$offset] = $value;
    }
    
    public function offsetUnset(mixed $offset): void
    {
        unset($this->result[$offset]);
    }
}
