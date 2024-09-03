<?php

declare(strict_types=1);

namespace Potter\Database\Table;

use Potter\{
    Database\Aware\DatabaseAwareInterface,
    Name\NameInterface
};
           
interface TableInterface extends DatabaseAwareInterface, NameInterface
{
    public function tableExists(): bool;
}
