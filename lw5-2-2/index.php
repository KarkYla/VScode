<?php

require_once 'vendor/autoload.php';

use App\MyChocolateFactory;

$factory = new MyChocolateFactory();

echo "Заказ 1:\n";
$factory->orderSnack('snickers');
echo "\n";

echo "Заказ 2:\n";
$factory->orderSnack('bounty');
echo "\n";

echo "Заказ 3:\n";
$factory->orderSnack('twix');
echo "\n";
