<?php

declare(strict_types=1);

namespace Potter\Database\Column;

trait ColumnTrait 
{
    private const string TYPE = 'type';
    private string $type;
    
    final public function getType(): string
    {
        return $this->get(self::TYPE);
    }
    
    final public function hasType(): bool
    {
        return $this->has(self::TYPE);
    }
    
    final protected function setType(string $type): string
    {
        return $this->set(self::TYPE, $type);
    }
    
    final protected function unsetType(): void
    {
        $this->unset(self::TYPE);
    }
    
    final public function withType(string $type): static
    {
        return $this->with(self::TYPE, $type);
    }
    
    final public function withoutType(): static
    {
        return $this->without(self::TYPE);
    }
    
    
    abstract public function get(string $var): mixed;
    abstract public function has(string $var): bool;
    abstract protected function set(string $var, mixed $val): mixed;
    abstract protected function unset(string $var): void;
    abstract public function with(string $var, mixed $val): static;
    abstract public function without(string $var): static;
}
