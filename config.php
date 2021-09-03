<?php

session_start();

$hostname = 'localhost';
$user = 'root';
$password = '';
$database = 'wifinet';

$connect = mysqli_connect($hostname, $user, $password, $database,);
