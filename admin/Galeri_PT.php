<?php 
session_start();
if(!isset($_SESSION['username'])){
	header("Location: Index.php");
} else {
	?>

	<?php
	include 'Config.php';
	$gambar = $_FILES['gambar']['name'];
	$nama_galeri =$_POST['nama_galeri'];
	$id_album =$_POST['id_album'];

	if ($gambar !="") {
		$ekstensi_diperbolehkan	= array('png','jpg','images','jpeg');
		$x = explode('.', $gambar);
		$ekstensi = strtolower(end($x));
		$file_tmp =$_FILES['gambar']['tmp_name'];

		if(in_array($ekstensi, $ekstensi_diperbolehkan)===true) {
			$query = mysqli_query($connect, "INSERT INTO bl_galeri values('','$id_album','$gambar','$nama_galeri',NOW())");
			if($query) {
				move_uploaded_file($file_tmp, '../file/Galeri/'.$gambar);
				echo "<script> alert('Data Berhasil Di Tambahkan');window.location.href='Galeri.php';</script>";
			} else {
				echo "<script> alert('Anda Tidak Memilih Album');window.location.href='Galeri.php';</script>";
			}
		} else {
			echo "<script> alert('Ekstensi Gambar Tidak Di Perbolehkan');window.location.href='Galeri.php';</script>";
		}
	}
	?>
	<?php } ?>