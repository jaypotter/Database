<?php

namespace Potter\Database;

abstract class Database extends AbstractDatabase
{
    use DatabaseDimensionTrait, DatabaseTrait;
}