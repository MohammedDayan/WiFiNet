<?php
$conn = new mysqli('localhost', 'root', '', 'wifinetdb') or die(mysqli_error($conn));

if (isset($_POST['save'])) {
    $username = $_POST['username'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $conn->query("INSERT INTO users (username, mobile, email, address ,password)    VALUES( '$username','$phone','$email','$address','$password')") or
        die($conn->error);
}
