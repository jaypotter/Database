<?php

declare(strict_types=1);

namespace Potter\Database\Column;

abstract class AbstractColumn implements ColumnInterface
{
    abstract public function getType(): string;
    abstract public function hasType(): bool;
    abstract protected function setType(string $type): string;
    abstract protected function unsetType(): void;
    abstract public function withType(string $type): static;
    abstract public function withoutType(): static;
}
