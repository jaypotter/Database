<?php

declare(strict_types=1);

namespace Potter\Database\Record;

use Potter\ArrayAccess\AbstractArrayAccess;

abstract class AbstractRecord extends AbstractArrayAccess implements RecordInterface
{
    abstract public function getValues(): array;
    abstract public function hasValues(): bool;
    abstract protected function setValues(?array $values = null): ?array;
    abstract protected function unsetValues(): void;
    abstract public function withValues(?array $values = null): static;
    abstract public function withoutValues(): static;
    
    abstract public function getKey(string $key): mixed;
    abstract public function hasKey(string $key): bool;
    abstract protected function setKey(string $key, ?mixed $value = null): ?mixed;
    abstract protected function unsetKey(string $key): void;
    abstract public function withKey(string $key, ?mixed $value = null): static;
    abstract public function withoutKey(string $key): static;
    
    abstract public function insert(): void;
}
