<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'db_rotan';
$connect = mysqli_connect($host, $user, $pass) or die(mysqli_error());
$dbselect = mysqli_select_db($connect, $dbname);
?>

