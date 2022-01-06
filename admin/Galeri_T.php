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
		<h3><i class="fa fa-newspaper"></i> TAMBAH GALERI</h3>
		<form action="Galeri_PT.php" method="post" enctype="multipart/form-data">
			<table class="table">
				<tr>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>Pilih Album</td>
					<td><select name="id_album" id="id_album" class="form-control" required>
						<option disabled selected> Pilih Album</option>
						<?php 
						$query = mysqli_query($connect, "SELECT * FROM bl_album");
						while($album = mysqli_fetch_assoc($query)) : ?>
							<option value="<?= $album['id_album'] ?>"><?= $album['nama_album'] ?></option>
						<?php endwhile; ?>
					</select>
				</td>
			</tr>
			<tr>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>Upload Gambar Galeri</td>
				<td><input type="file" class="form-control" name="gambar" required></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>Nama Galeri</td>
				<td><input type="text" class="form-control" name="nama_galeri" placeholder="Masukan Nama Galeri" required></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
			</tr>
			<td></td>
			<td><input type="submit" class="btn btn-info" value="Simpan" name="Simpan">
				<a href="Galeri.php" class="btn btn-danger">Batal</a></td>
			</tr>
		</table> 
	</form>
</div>
</body>
</html>