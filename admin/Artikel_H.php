<?php 
include 'Config.php';

$query= mysqli_query($connect, "SELECT * FROM bl_artikel WHERE id_artikel='$_GET[id]'");
$nama_gambar=mysqli_fetch_array($query);
$lokasi=$nama_gambar['gambar'];


mysqli_query($connect, "Delete From bl_artikel where id_artikel='$_GET[id]'");
$hapus_gambar="../file/Artikel/$lokasi";
unlink($hapus_gambar);
header("location:Artikel.php");

?>