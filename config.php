<?php

    session_start();
    
    $host = "localhost";
    $user = "root";
    $password = "";
    $dbname = "wifinetdb";

    $connect = mysqli_connect($host,$user,$password,$dbname);