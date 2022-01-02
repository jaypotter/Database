<?php

namespace Potter\Database\Connection\Local;

use Potter\{
    Connection\Local\LocalConnectionInterface,
    Database\Connection\DatabaseConnectionInterface
};

interface LocalDatabaseConnectionInterface extends DatabaseConnectionInterface, LocalConnectionInterface
{

} 