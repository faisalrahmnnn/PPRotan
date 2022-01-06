<?php include 'Header.php';
include 'Config.php';

$id_pesan = $_GET['id'];
$query= mysqli_query($connect, "SELECT * FROM bl_pesan WHERE id_pesan=$id_pesan");
$tampil = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="col-md-12">
		<h3><i class="fa fa-eye"></i> DETAIL PESAN</h3>
		<form action="" method="post">
			<table class="table">
				<tr>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td><?= $tampil['nama'] ?></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><?= $tampil['email'] ?></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>Pesan</td>
					<td><?= $tampil['pesan'] ?></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>Tanggal & Jam</td>
					<td><?= $tampil['updated'] ?></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td><a href="Pesan.php" class="btn btn-danger">Kembali</a></td>
					<td></td>
				</tr>
			</table> 
		</form>
	</div>
</body>
</html>