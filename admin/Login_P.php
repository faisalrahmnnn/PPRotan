<?php 
session_start();
include 'Config.php';

$username=$_POST['username'];
$password=$_POST['password'];
$pass=md5($password);

$query=mysqli_query($connect, "select * from bl_admin where username='$username' and password='$pass'")or die(mysqli_error());

if(mysqli_num_rows($query)==1){
	$_SESSION['username']=$username;
	$_SESSION['password']=$password;
	echo "<script>
	alert('Berhasil Login');
	window.location.href='Dashboard.php';
	</script>";
} else {
	echo "<script>
	alert('Login Gagal !!');
	window.location.href='Index.php';
	</script>";
}
?>	

