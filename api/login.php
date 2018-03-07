<?php

require_once 'include/Config.php';

$username = $_POST['username'];
$password = $_POST['password'];

$conn = mysqli_connect($HOST, $USER, $PASS, $DATABASE) or die("Mysql Error: " . mysqli_error($conn));

$sql = "SELECT * FROM `users` WHERE username = $username AND password = $password";