<?php include 'Header.php';
include 'Config.php';

$id_aneka = $_GET['id'];
$query= mysqli_query($connect, "SELECT * FROM bl_aneka WHERE id_aneka=$id_aneka");
$tampil = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="col-md-12">
		<h3><i class="fa fa-edit"></i> EDIT ANEKA</h3>
		<form action="Aneka_PE.php" method="post" enctype="multipart/form-data">
			<table class="table">
				<tr>
					<td></td>
					<td><input type="hidden" class="form-control" name="id_aneka" value="<?php echo $tampil['id_aneka'] ?>" required></td>
				</tr>
				<tr>
					<td>Gambar Aneka Sebelumnya</td>
					<td><img style="width: 100px; "src="../file/Aneka/<?php echo $tampil['gambar']; ?>"></td>	
				</tr>
				<tr>
					<td></td>
					<td></td>	
				</tr>
				<tr>
					<td>Upload Gambar Aneka Baru</td>
					<td><input type="file" class="form-control" name="gambarbaru">
						<i style="float: left;font-size: 10px;color: red">( Abaikan jika tidak merubah gambar )</i></td>
					</tr>
					<tr>
						<td></td>
						<td></td>	
					</tr>
					<tr>
						<td>Nama Aneka</td>
						<td><input type="text" class="form-control" name="nama_aneka" value="<?php echo $tampil['nama_aneka'] ?>" required></td>
					</tr>
					<tr>
						<td></td>
						<td></td>	
					</tr>
					<tr>
						<td>Deskripsi Aneka</td> 
						<td><textarea name="deskripsi" id="ckeditor" class="ckeditor form-control"> <?= $tampil['deskripsi'] ?></textarea></td>
					</tr>
					<tr>
						<td></td>
						<td></td>	
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" class="btn btn-info" value="Simpan">
							<a href="Aneka.php" class="btn btn-danger">Batal</a></td>
						</tr>
					</table> 
				</form>
			</div>
		</body>
		</html>