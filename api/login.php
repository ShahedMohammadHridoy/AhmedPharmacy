<?php

require_once 'include/Config.php';

$conn = mysqli_connect($HOST, $USER, $PASS, $DATABASE) or die("Mysql Error: " . mysqli_error($conn));

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM `users` ";