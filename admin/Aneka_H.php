<?php 
include 'Config.php';

$query= mysqli_query($connect, "SELECT * FROM bl_aneka WHERE id_aneka='$_GET[id]'");
$nama_gambar=mysqli_fetch_array($query);
$lokasi=$nama_gambar['gambar'];


mysqli_query($connect, "Delete From bl_aneka where id_aneka='$_GET[id]'");
$hapus_gambar="../file/Aneka/$lokasi";
unlink($hapus_gambar);
header("location:Aneka.php");

?>