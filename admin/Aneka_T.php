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
		<h3><i class="fab fa-battle-net"></i>TAMBAH ANEKA</h3>
		<form action="Aneka_PT.php" method="post" enctype="multipart/form-data">
			<table class="table">
				<tr>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>Upload Gambar Aneka</td>
					<td><input type="file" class="form-control" name="gambar" required></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>Nama Aneka</td>
					<td><input type="text" class="form-control" name="nama_aneka" placeholder="Masukan Nama Aneka Kerajinan Rotan" required></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>Deskripsi Aneka</td> 
					<td><textarea name="deskripsi" id="ckeditor" class="ckeditor form-control"></textarea></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
				</tr>
				<td></td>
				<td><input type="submit" class="btn btn-info" value="Simpan" name="Simpan">
					<a href="Aneka.php" class="btn btn-danger">Batal</a></td>
				</tr>
			</table> 
		</form>
	</div>
</body>
</html>