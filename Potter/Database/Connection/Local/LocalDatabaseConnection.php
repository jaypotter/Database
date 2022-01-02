<?php

namespace Potter\Database\Connection\Local;

use Potter\Database\Connection\DatabaseConnectionTrait;

abstract class LocalDatabaseConnection extends AbstractLocalDatabaseConnection
{
    use DatabaseConnectionTrait;
    
    private const PREFIX = 'localdb';

    public function getPrefix(): string
    {
        return self::PREFIX;
    }
}