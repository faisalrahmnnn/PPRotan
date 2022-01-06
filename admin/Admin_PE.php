<?php 
session_start();
if(!isset($_SESSION['username'])){
	header("Location: Index.php");
} else {
	?>

	<?php 
	include 'Config.php';
	'Header.php';

	$id_admin=$_POST['id_admin'];
	$username=$_POST['username'];
	$password_baru=$_POST['password_baru'];
	$pass=md5($password_baru);

	if (empty($password_baru)){
		$sql=mysqli_query($connect, "UPDATE bl_admin SET username='$username', updated=NOW() WHERE id_admin='$id_admin'");
	} else {
		$sql=mysqli_query($connect, "UPDATE bl_admin SET username='$_POST[username]', password='$pass', updated=NOW() WHERE id_admin='$_POST[id_admin]'");
	}
	echo "<script> alert('Data Berhasil Di Edit');window.location.href='Admin.php';</script>";
	?>
	<?php } ?>