<?php include 'Header.php';
include 'Config.php';

$id_artikel = $_GET['id'];
$query= mysqli_query($connect, "SELECT * FROM bl_artikel WHERE id_artikel=$id_artikel");
$tampil = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="col-md-12">
		<h3><i class="fa fa-eye"></i> DETAIL DESKRIPSI ARTIKEL</h3>
		<form action="" method="post">
			<table class="table">
				<tr>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>Judul Artikel</td>
					<td><?= $tampil['judul'] ?></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>Deskripsi Artikel</td>
					<td><?= $tampil['deskripsi'] ?></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td><a href="Artikel.php" class="btn btn-danger">Kembali</a></td>
					<td></td>
				</tr>
			</table> 
		</form>
	</div>
</body>
</html>