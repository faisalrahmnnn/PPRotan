<?php 
include 'Config.php';

$query= mysqli_query($connect, "SELECT * FROM bl_album WHERE id_album='$_GET[id]'");
$nama_gambar=mysqli_fetch_array($query);
$lokasi=$nama_gambar['gambar'];


mysqli_query($connect, "Delete From bl_album where id_album='$_GET[id]'");
$hapus_gambar="../file/Album/$lokasi";
unlink($hapus_gambar);
header("location:Album.php");

?>