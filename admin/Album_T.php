<?php include 'Header.php';
include 'Config.php'; 
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="col-md-12">
		<h3><i class="fab fa-envira"></i> TAMBAH ALBUM</h3>
		<form action="Album_PT.php" method="post" enctype="multipart/form-data">
			<table class="table">
				<tr>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>Upload Gambar Album</td>
					<td><input type="file" class="form-control" name="gambar" required></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>Nama Album</td>
					<td><input type="text" class="form-control" name="nama_album" placeholder="Masukan Nama Album" required></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
				</tr>
				<td></td>
				<td><input type="submit" class="btn btn-info" value="Simpan" name="Simpan">
					<a href="Album.php" class="btn btn-danger">Batal</a></td>
				</tr>
			</table> 
		</form>
	</div>
</body>
</html>