<?php

namespace Potter\Database\Connection\Remote;

use Potter\Connection\{
    Database\DatabaseConnectionInterface,
    Remote\RemoteConnectionInterface
};

interface RemoteDatabaseConnectionInterface extends DatabaseConnectionInterface, RemoteConnectionInterface
{

}