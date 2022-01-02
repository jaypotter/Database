<?php

namespace Potter\Database\Connection\Remote;

use Potter\Database\Connection\DatabaseConnectionTrait;

abstract class RemoteDatabaseConnection extends AbstractRemoteDatabaseConnection 
{
    use DatabaseConnectionTrait;

    private const PREFIX = 'remotedb';

    public function getPrefix(): string
    {
        return self::PREFIX;
    }
}