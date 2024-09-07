<?php

declare(strict_types=1);

namespace Potter\Database\Aware;

use Potter\Database\DatabaseInterface;

trait DatabaseAwareTrait 
{
    private const string DATABASE = 'database';
    private DatabaseInterface $database;
    
    final public function getDatabase(): DatabaseInterface
    {
        return $this->get(self::DATABASE);
    }
    
    final public function hasDatabase(): bool
    {
        return $this->has(self::DATABASE);
    }
    
    final protected function setDatabase(?DatabaseInterface $database = null): ?DatabaseInterface
    {
        if (is_null($database)) {
            $this->unset(self::DATABASE);
            return null;
        }
        return $this->set(self::DATABASE, $database);
    }
    
    final protected function unsetDatabase(): void
    {
        $this->unset(self::DATABASE);
    }
    
    final public function withDatabase(?DatabaseInterface $database = null): static
    {
        if (is_null($database)) {
            return $this->without(self::DATABASE);
        }
        return $this->with(self::DATABASE, $database);
    }
    
    final public function withoutDatabase(): static
    {
        return $this->without(self::DATABASE);
    }
    
    abstract public function get(string $var): mixed;
    abstract public function has(string $var): bool;
    abstract protected function set(string $var, mixed $val): mixed;
    abstract protected function unset(string $var): void;
    abstract public function with(string $var, mixed $val): static;
    abstract public function without(string $var): static;
}
