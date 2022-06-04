<?php
require_once __DIR__ . '/vendor/autoload.php';

use App\{
  Http\Controllers\MainController,
  Http\Controllers\Admin\DashboardController,
  Http\Controllers\Admin\OrdersController,
  Http\Helpers\ImageHelper
};
use Models\{
  Order,
  Product,
  User
};

$user = new User();
$product = new Product();
$order = new Order();
$imageHelper = new ImageHelper();
$mainController = new MainController();
$dashboardController = new DashboardController();
$ordersController = new OrdersController();


var_dump($user);
var_dump($product);
var_dump($order);
var_dump($imageHelper);
var_dump($mainController);
var_dump($dashboardController);
var_dump($ordersController);
