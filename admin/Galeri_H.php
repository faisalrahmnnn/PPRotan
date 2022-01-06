<?php 
include 'Config.php';

$query= mysqli_query($connect, "SELECT * FROM bl_galeri WHERE id_galeri='$_GET[id]'");
$nama_gambar=mysqli_fetch_array($query);
$lokasi=$nama_gambar['gambar'];


mysqli_query($connect, "Delete From bl_galeri where id_galeri='$_GET[id]'");
$hapus_gambar="../file/Galeri/$lokasi";
unlink($hapus_gambar);	
header("location:Galeri.php");

?>