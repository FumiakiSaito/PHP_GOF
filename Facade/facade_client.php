<?php
require_once 'Order.class.php';
require_once 'OrderItem.class.php';
require_once 'ItemDao.class.php';
require_once 'OrderManager.class.php';

$order = new Order();
$item_dao = ItemDao::getInstance();

$order->additem(new OrderItem($item_dao->findById(1), 2));
$order->additem(new OrderItem($item_dao->findById(2), 1));
$order->additem(new OrderItem($item_dao->findById(3), 3));

/**
 * 注文処理はこの一行だけ
 */
OrderManager::order($order);

