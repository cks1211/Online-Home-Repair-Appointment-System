<?php

$host = 'localhost'; //127.0.0.1
$user = 'root';
$password = '';
$database = 'home_repair_database';
$connection = mysqli_connect($host, $user, $password, $database);

if ($connection === false) {
    die('Connection failed' . mysqli_connect_error());
}
?>