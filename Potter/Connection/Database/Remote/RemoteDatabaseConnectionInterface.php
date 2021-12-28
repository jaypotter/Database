<?php

namespace Potter\Connection\Database\Remote;

use Potter\Connection\{
    Database\DatabaseConnectionInterface,
    Remote\RemoteConnectionInterface
};

interface RemoteDatabaseConnectionInterface extends DatabaseConnectionInterface, RemoteConnectionInterface
{

}