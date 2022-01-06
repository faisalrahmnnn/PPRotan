<?php 
session_start();
if(!isset($_SESSION['username'])){
	header("Location: Index.php");
} else {
	?>

	<?php 
	include 'Config.php';
	'Header.php';

	$id_tentang=$_POST['id_tentang'];
	$deskripsi=$_POST['deskripsi'];

	$sql=mysqli_query($connect, "UPDATE bl_tentang SET deskripsi='$_POST[deskripsi]', updated=NOW() WHERE id_tentang='$_POST[id_tentang]'");
	if($sql) {
		echo "<script> alert('Data Berhasil Di Edit');window.location.href='Tentang.php';</script>";
	} else
	{
		echo "<script> alert('Gagal Menyimpan Data');window.location.href='Tentang.php';</script>";
	}
	?>
	<?php } ?>