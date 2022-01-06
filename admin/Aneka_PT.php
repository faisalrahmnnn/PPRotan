<?php 
session_start();
if(!isset($_SESSION['username'])){
	header("Location: Index.php");
} else {
	?>

	<?php
	include 'Config.php';
	$gambar = $_FILES['gambar']['name'];
	$nama_aneka =$_POST['nama_aneka'];
	$deskripsi =$_POST['deskripsi'];

	if ($gambar !="") {
		$ekstensi_diperbolehkan	= array('pdf','xls','xlsx');
		$x = explode('.', $gambar);
		$ekstensi = strtolower(end($x));
		$file_tmp =$_FILES['gambar']['tmp_name'];

		if(in_array($ekstensi, $ekstensi_diperbolehkan)===true) {
			$query = mysqli_query($connect, "INSERT INTO bl_aneka values('','$gambar','$nama_aneka','$deskripsi',NOW())");
			if($query) {
				move_uploaded_file($file_tmp, '../file/Aneka/'.$gambar);
				echo "<script> alert('Data Berhasil Di Tambahkan');window.location.href='Aneka.php';</script>";
			} else {
				echo "<script> alert('Gagal Menambahkan Data');window.location.href='Aneka.php';</script>";
			}
		} else {
			echo "<script> alert('Ekstensi Gambar Tidak Di Perbolehkan');window.location.href='Aneka.php';</script>";
		}
	}
	?>
	<?php } ?>