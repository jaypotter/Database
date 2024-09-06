<?php

declare(strict_types=1);

namespace Potter\Database\Table\Aware;

use Potter\Database\Table\TableInterface;

interface TableAwareInterface 
{
    public function getTable(): TableInterface;
    public function hasTable(): bool;
    public function withTable(?TableInterface $table = null): static;
    public function withoutTable(): static;
}
