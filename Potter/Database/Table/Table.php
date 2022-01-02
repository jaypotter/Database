<?php

namespace Potter\Database\Table;

use Potter\Dimension\Child\ChildDimension;

abstract class Table extends ChildDimension
{
    use TableDimensionTrait, TableTrait;
}