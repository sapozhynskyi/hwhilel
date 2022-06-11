<?php
require_once __DIR__ . '/dbConnect.php';

$queryDelete = "DELETE FROM users WHERE  id = :id";
$queryDelete = $connect->prepare($queryDelete);
$queryDelete->bindParam(':id',$_GET['id']);
$queryDelete->execute();
header('location:checkID.php');