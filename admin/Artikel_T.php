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
		<h3><i class="fa fa-newspaper"></i> TAMBAH ARTIKEL</h3>
		<form action="Artikel_PT.php" method="post" enctype="multipart/form-data">
			<table class="table">
				<tr>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>Upload Gambar Artikel</td>
					<td><input type="file" class="form-control" name="gambar" required></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>Judul Artikel</td>
					<td><input type="text" class="form-control" name="judul" placeholder="Masukan Judul Artikel" required></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>Deskripsi Artikel</td> 
					<td><textarea name="deskripsi" id="ckeditor" class="ckeditor form-control"></textarea></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
				</tr>
				<td></td>
				<td><input type="submit" class="btn btn-info" value="Simpan" name="Simpan">
					<a href="Artikel.php" class="btn btn-danger">Batal</a></td>
				</tr>
			</table> 
		</form>
	</div>
</body>
</html>