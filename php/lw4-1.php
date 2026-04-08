<?php

require_once __DIR__ . '/vendor/autoload.php';

use Smysh\Lw\NumberFilter;

$filter = new NumberFilter();
$filter->addNumber(10);
$filter->addNumber(5);

echo "Четные: " . implode(', ', $filter->getEven()) . PHP_EOL;