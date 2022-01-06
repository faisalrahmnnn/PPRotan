<?php include 'Header.php';
include 'Config.php';

$id_album = $_GET['id'];
$query= mysqli_query($connect, "SELECT * FROM bl_album WHERE id_album=$id_album");
$tampil = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="col-md-12">
		<h3><i class="fa fa-edit"></i> EDIT ALBUM</h3>
		<form action="Album_PE.php" method="post" enctype="multipart/form-data">
			<table class="table">
				<tr>
					<td></td>
					<td><input type="hidden" class="form-control" name="id_album" value="<?php echo $tampil['id_album'] ?>" required></td>
				</tr>
				<tr>
					<td>Gambar Album Sebelumnya</td>
					<td><img style="width: 100px; "src="../file/Album/<?php echo $tampil['gambar']; ?>"></td>	
				</tr>
				<tr>
					<td></td>
					<td></td>	
				</tr>
				<tr>
					<td>Upload Gambar Album Baru</td>
					<td><input type="file" class="form-control" name="gambarbaru">
						<i style="float: left;font-size: 10px;color: red"> ( Abaikan jika tidak merubah gambar )</i></td>
					</tr>
					<tr>
						<td></td>
						<td></td>	
					</tr>
					<tr>
						<td>Nama Album</td>
						<td><input type="text" class="form-control" name="nama_album" value="<?php echo $tampil['nama_album'] ?>" required></td>
					</tr>
					<tr>
						<td></td>
						<td></td>	
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" class="btn btn-info" value="Simpan">
							<a href="Album.php" class="btn btn-danger">Batal</a></td>
						</tr>
					</table> 
				</form>
			</div>
		</body>
		</html>