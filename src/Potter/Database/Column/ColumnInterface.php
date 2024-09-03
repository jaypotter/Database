<?php

declare(strict_types=1);

namespace Potter\Database\Column;

use Potter\Name\NameInterface;

interface ColumnInterface extends NameInterface
{
    public function getType(): string;
    public function hasType(): bool;
    public function withType(string $type): static;
    public function withoutType(): static;
}
