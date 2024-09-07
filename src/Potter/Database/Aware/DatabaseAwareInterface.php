<?php

declare(strict_types=1);

namespace Potter\Database\Aware;

use Potter\Database\DatabaseInterface;

interface DatabaseAwareInterface
{
    public function getDatabase(): DatabaseInterface;
    public function hasDatabase(): bool;
    public function withDatabase(?DatabaseInterface $database = null): static;
    public function withoutDatabase(): static;
}
