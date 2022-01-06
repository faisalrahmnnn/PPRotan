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
		<h3><i class="fa fa-edit"></i> EDIT ARTIKEL</h3>
		<form action="Artikel_PE.php" method="post" enctype="multipart/form-data">
			<table class="table">
				<tr>
					<td></td>
					<td><input type="hidden" class="form-control" name="id_artikel" value="<?php echo $tampil['id_artikel'] ?>" required></td>
				</tr>
				<tr>
					<td>Gambar Artikel Sebelumnya</td>
					<td><img style="width: 100px; "src="../file/Artikel/<?php echo $tampil['gambar']; ?>"></td>	
				</tr>
				<tr>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>Upload Gambar Artikel Baru</td>
					<td><input type="file" class="form-control" name="gambarbaru">
						<i style="float: left;font-size: 10px;color: red">( Abaikan jika tidak merubah gambar )</i></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Judul Artikel</td>
						<td><input type="text" class="form-control" name="judul" value="<?php echo $tampil['judul'] ?>" required></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Deskripsi Artikel</td> 
						<td><textarea name="deskripsi" id="ckeditor" class="ckeditor form-control"> <?= $tampil['deskripsi'] ?></textarea></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" class="btn btn-info" value="Simpan">
							<a href="Artikel.php" class="btn btn-danger">Batal</a></td>
						</tr>
					</table> 
				</form>
			</div>
		</body>
		</html>