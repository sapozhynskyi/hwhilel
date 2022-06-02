<?php

spl_autoload_register(function ($class){
    $file =  __DIR__ . '/' . str_replace('\\','/', $class) . '.php';
    if (file_exists($file)){
        require_once $file;
    } else {
        die('file is missing');
    }
});

use App\{
    Models\User,
    Models\Product,
    Models\Order,
    Http\Helpers\ImageHelper,
    Http\Controllers\MainController,
    Http\Controllers\Admins\DashboardController,
    Http\Controllers\Admins\OrdersController };

$user = new User();
/*
$product = new Product();
$order = new Order();
$imageHelper = new ImageHelper();
$mainController = new MainController();
$dashboardController = new DashboardController();
$ordersController = new OrdersController();
*/

var_dump($user);
/*
var_dump($product);
var_dump($order);
var_dump($imageHelper);
var_dump($mainController);
var_dump($dashboardController);
var_dump($ordersController);
*/

