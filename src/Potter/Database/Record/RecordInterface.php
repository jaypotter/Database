<?php

declare(strict_types=1);

namespace Potter\Database\Record;

use Potter\{
    ArrayAccess\ArrayAccessInterface,
    Database\Table\Aware\TableAwareInterface
};

interface RecordInterface extends ArrayAccessInterface, TableAwareInterface
{
    public function getValues(): array;
    public function hasValues(): bool;
    public function withValues(array $values): static;
    public function withoutValues(): static;
    
    public function getKey(string $key): mixed;
    public function hasKey(string $key): bool;
    public function withKey(string $key, ?mixed $value = null): static;
    public function withoutKey(string $key): static;
    
    public function insert(): void;
}
