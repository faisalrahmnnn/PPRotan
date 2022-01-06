<?php 
session_start();
if(!isset($_SESSION['username'])){
	header("Location: Index.php");
} else {
	?>

	<?php
	include 'Config.php';
	$gambar = $_FILES['gambar']['name'];
	$judul =$_POST['judul'];
	$deskripsi =$_POST['deskripsi'];

	if ($gambar !="") {
		$ekstensi_diperbolehkan	= array('png','jpg','images','jpeg');
		$x = explode('.', $gambar);
		$ekstensi = strtolower(end($x));
		$file_tmp =$_FILES['gambar']['tmp_name'];

		if(in_array($ekstensi, $ekstensi_diperbolehkan)===true) {
			$query = mysqli_query($connect, "INSERT INTO bl_artikel values('','$gambar','$judul','$deskripsi',NOW())");
			if($query) {
				move_uploaded_file($file_tmp, '../file/Artikel/'.$gambar);
				echo "<script> alert('Data Berhasil Di Tambahkan');window.location.href='Artikel.php';</script>";
			} else {
				echo "<script> alert('Gagal Menambahkan Data');window.location.href='Artikel.php';</script>";
			}
		} else {
			echo "<script> alert('Ekstensi Gambar Tidak Di Perbolehkan');window.location.href='Artikel.php';</script>";
		}
	}
	?>
	<?php } ?>