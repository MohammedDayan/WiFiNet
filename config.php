<?php

session_start();

$host = "localhost";
$user = "root";
$password = "";
$dbname = "wifinet";

$connect = mysqli_connect($host, $user, $password, $dbname);
