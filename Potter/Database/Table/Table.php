<?php

namespace Potter\Database\Table;

use Potter\Dimension\Hybrid\HybridDimension;

abstract class Table extends HybridDimension
{
    use TableDimensionTrait, TableTrait;
}