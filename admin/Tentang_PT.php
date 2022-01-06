<?php 
session_start();
if(!isset($_SESSION['username'])){
	header("Location: Index.php");
} else {
	?>

	<?php
	include 'Config.php';
	$nama =$_POST['nama'];
	$email =$_POST['email'];
	$pesan =$_POST['pesan'];

	$query = mysqli_query($connect, "INSERT INTO bl_pesan values('','$nama','$email','$pesan',NOW())");
	if($query) {
		echo "<script> alert('Pesan & Kritik Anda Berhasil Di Tambahkan');window.location.href='../Tentang.php';</script>";
	} else {
		echo "<script> alert('Gagal Menambahkan Pesan & Kritik');window.location.href='../Tentang.php';</script>";
	}
	?>
	<?php } ?>