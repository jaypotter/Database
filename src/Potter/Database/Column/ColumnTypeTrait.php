<?php

declare(strict_types=1);

namespace Potter\Database\Column;

trait ColumnTypeTrait 
{
    private const string COLUMN_TYPE = 'columnType';
    private string $columnType;
    
    final public function getColumnType(): string
    {
        return $this->get(self::COLUMN_TYPE);
    }
    
    final public function hasColumnType(): bool
    {
        return $this->has(self::COLUMN_TYPE);
    }
    
    final protected function setColumnType(string $columnType): string
    {
        return $this->set(self::COLUMN_TYPE, $columnType);
    }
    
    final protected function unsetColumnType(): void
    {
        $this->unset(self::COLUMN_TYPE);
    }
    
    final public function withColumnType(string $columnType): static
    {
        return $this->with(self::COLUMN_TYPE, $columnType);
    }
    
    final public function withoutColumnType(): static
    {
        return $this->without(self::COLUMN_TYPE);
    }
    
    abstract public function get(string $var): mixed;
    abstract public function has(string $var): bool;
    abstract protected function set(string $var, mixed $val): mixed;
    abstract protected function unset(string $var): void;
    abstract public function with(string $var, mixed $val): static;
    abstract public function without(string $var): static;
}
