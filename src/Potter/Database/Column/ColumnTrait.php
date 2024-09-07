<?php

declare(strict_types=1);

namespace Potter\Database\Column;

trait ColumnTrait 
{
    private const string COLUMN_TYPE = 'columnType';
    private const string NULLABLE = 'nullable';
    private const string PRIMARY_KEY = 'primaryKey';
    private const string UNIQUE_CONSTRAINT = 'uniqueConstraint';
    
    private string $columnType;
    private bool $nullable = false;
    private bool $primaryKey = false;
    private bool $uniqueConstraint = false;
    
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
    
    final public function hasNullable(): bool
    {
        return $this->get(self::NULLABLE) === true;
    }
    
    final protected function setNullable(bool $nullable = true): bool
    {
        return $this->set(self::NULLABLE, $nullable);
    }
    
    final protected function unsetNullable(): void
    {
        $this->set(self::NULLABLE, false);
    }
    
    final public function withNullable(bool $nullable = true): static
    {
        return $this->with(self::NULLABLE, $nullable);
    }
    
    final public function withoutNullable(): static
    {
        return $this->with(self::NULLABLE, false);
    }
    
    final public function hasPrimaryKey(): bool
    {
        return $this->get(self::PRIMARY_KEY) === true;
    }
    
    final protected function setPrimaryKey(bool $primaryKey = true): bool
    {
        return $this->set(self::PRIMARY_KEY, $primaryKey);
    }
    
    final protected function unsetPrimaryKey(): void
    {
        $this->set(self::PRIMARY_KEY, false);
    }
    
    final public function withPrimaryKey(bool $primaryKey = true): static
    {
        return $this->with(self::PRIMARY_KEY, $primaryKey);
    }
    
    final public function withoutPrimaryKey(): static
    {
        return $this->with(self::PRIMARY_KEY, false);
    }
    
    final public function hasUniqueConstraint(): bool
    {
        return $this->hasPrimaryKey() || $this->get(self::UNIQUE_CONSTRAINT) === true;
    }
    
    final protected function setUniqueConstraint(bool $uniqueConstraint = true): bool
    {
        if (($uniqueConstraint === false) && $this->hasPrimaryKey()) {
            throw new \Exception;
        }
        return $this->set(self::UNIQUE_CONSTRAINT, $uniqueConstraint);
    }
    
    final protected function unsetUniqueConstraint(): void
    {
        $this->setUniqueConstraint(false);
    }
    
    final public function withUniqueConstraint(bool $uniqueConstraint = true): static
    {
        return $this->with(self::UNIQUE_CONSTRAINT, $uniqueConstraint);
    }
    
    final public function withoutUniqueConstraint(): static
    {
        return $this->with(self::UNIQUE_CONSTRAINT, false);
    }
    
    abstract public function get(string $var): mixed;
    abstract public function has(string $var): bool;
    abstract protected function set(string $var, mixed $val): mixed;
    abstract protected function unset(string $var): void;
    abstract public function with(string $var, mixed $val): static;
    abstract public function without(string $var): static;
}
