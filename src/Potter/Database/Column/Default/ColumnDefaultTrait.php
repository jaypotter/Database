<?php

declare(strict_types=1);

namespace Potter\Database\Column\Default;

trait ColumnDefaultTrait 
{
    private const string COLUMN_DEFAULT = 'columnDefault';
    private string $columnDefault;
    
    final public function getColumnDefault(): string
    {
        return $this->get(self::COLUMN_DEFAULT);
    }
    
    final public function hasColumnDefault(): bool
    {
        return $this->has(self::COLUMN_DEFAULT);
    }
    
    final protected function setColumnDefault(?string $columnDefault = null): ?string
    {
        if (is_null($columnDefault)) {
            $this->unsetColumnDefault();
            return null;
        }
        return $this->set(self::COLUMN_DEFAULT, $columnDefault);
    }
    
    final protected function unsetColumnDefault(): void
    {
        $this->unset(self::COLUMN_DEFAULT);
    }
    
    final public function withColumnDefault(?string $columnDefault = null): static
    {
        if (is_null($columnDefault)) {
            return $this->withoutColumnDefault();
        }
        return $this->with(self::COLUMN_DEFAULT, $columnDefault);
    }
    
    final public function withoutColumnDefault(): static
    {
        return $this->without(self::COLUMN_DEFAULT);
    }
    
    abstract public function get(string $var): mixed;
    abstract public function has(string $var): bool;
    abstract protected function set(string $var, mixed $val): mixed;
    abstract protected function unset(string $var): void;
    abstract public function with(string $var, mixed $val): static;
    abstract public function without(string $var): static;
}
