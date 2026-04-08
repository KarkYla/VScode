<?php

require_once __DIR__ . '/vendor/autoload.php';

use Smysh\Lw\OrderManager;

$manager = new OrderManager();

$id1 = $manager->createOrder(1500.50);
$id2 = $manager->createOrder(3200.00);
$id3 = $manager->createOrder(500.00);

$manager->setStatus($id1, 'в работе');
$manager->setStatus($id2, 'завершенный');
$manager->setStatus($id3, 'в работе');

$ordersInWork = $manager->getOrdersByStatus('в работе');

foreach ($ordersInWork as $order) {
    echo "ID: {$order['id']} | Sum: {$order['sum']} | Status: {$order['status']}" . PHP_EOL;
}