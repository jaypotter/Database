<?php

namespace Potter\Connection\Database\Local;

use Potter\Connection\{
    Database\DatabaseConnectionInterface,
    Local\LocalConnectionInterface
};

interface LocalDatabaseConnectionInterface extends DatabaseConnectionInterface, LocalConnectionInterface
{

}