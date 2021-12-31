<?php

namespace Potter\Database\Connection\Local;

use Potter\Connection\{
    Database\DatabaseConnectionInterface,
    Local\LocalConnectionInterface
};

interface LocalDatabaseConnectionInterface extends DatabaseConnectionInterface, LocalConnectionInterface
{

}