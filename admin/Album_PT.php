<?php 
session_start();
if(!isset($_SESSION['username'])){
	header("Location: Index.php");
} else {
	?>

	<?php
	include 'Config.php';
	$gambar = $_FILES['gambar']['name'];
	$nama_album =$_POST['nama_album'];

	if ($gambar !="") {
		$ekstensi_diperbolehkan	= array('png','jpg','images','jpeg');
		$x = explode('.', $gambar);
		$ekstensi = strtolower(end($x));
		$file_tmp =$_FILES['gambar']['tmp_name'];

		if(in_array($ekstensi, $ekstensi_diperbolehkan)===true) {
			$query = mysqli_query($connect, "INSERT INTO bl_album values('','$gambar','$nama_album',NOW())");
			if($query) {
				move_uploaded_file($file_tmp, '../file/Album/'.$gambar);
				echo "<script> alert('Data Berhasil Di Tambahkan');window.location.href='Album.php';</script>";
			} else {
				echo "<script> alert('Gagal Menambahkan Data');window.location.href='Album.php';</script>";
			}
		} else {
			echo "<script> alert('Ekstensi Gambar Tidak Di Perbolehkan');window.location.href='Album.php';</script>";
		}
	}
	?>
	<?php } ?>