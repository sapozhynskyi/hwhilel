<?php
require_once __DIR__ . '/dbConnect.php';


try {
    $queryCreate = "create table users(id int unsigned auto_increment primary key ,name varchar(50) not null ,surname varchar(75) not null ,age int unsigned not null ,email varchar(50) not null unique );";
    $queryCheck = "SHOW TABLES LIKE 'users';";
    $queryCheck = $connect->prepare($queryCheck);
    $queryCheck->execute();
    if ($queryCheck->rowCount() == 0 ) {
        $queryCreate = $connect->prepare($queryCreate);
        $queryCreate->execute();
        header('location:addRecord.php' );
    } else {
        throw new Exception('Таблица уже существует');
    }

} catch (Exception $e){
    die($e->getMessage());
}





