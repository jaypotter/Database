<?php

namespace Potter\Database\Connection\Remote;

abstract class RemoteDatabaseConnection extends AbstractRemoteDatabaseConnection 
{
    private const PREFIX = 'remotedb';

    public function getPrefix(): string
    {
        return self::PREFIX;
    }
}