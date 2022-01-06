<?php 
include 'Config.php';

$id_pesan=$_GET['id'];
mysqli_query($connect, "Delete From bl_pesan where id_pesan='$id_pesan'");
header("location:Pesan.php");

?>