<?php

namespace Potter\Database\Connection\Remote;

use Potter\{
    Connection\Remote\RemoteConnectionInterface,
    Database\DatabaseConnectionInterface
};

interface RemoteDatabaseConnectionInterface extends DatabaseConnectionInterface, RemoteConnectionInterface
{

}