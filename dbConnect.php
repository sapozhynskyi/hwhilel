<?php

const DB_HOST = "localhost";
const DB_USER = "root";
const DB_PASS = "";
const DATABASE = "blog";
const DSN = "mysql:host=". DB_HOST .";dbname=". DATABASE;
$connect = new PDO(DSN, DB_USER, DB_PASS);
