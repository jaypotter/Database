<?php

namespace Potter\Database\Connection\Remote;

use Potter\{
    Connection\Remote\RemoteConnectionInterface,
    Database\Connection\DatabaseConnectionInterface
};

interface RemoteDatabaseConnectionInterface extends DatabaseConnectionInterface, RemoteConnectionInterface
{

}