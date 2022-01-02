<?php

namespace Potter\Database\Table;

use Potter\Database\NameTrait;

abstract class Table extends AbstractTable
{
    use TableDimensionTrait, TableTrait;
}