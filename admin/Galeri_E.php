<?php include 'Header.php';
include 'Config.php';

$id_galeri = $_GET['id'];
$query = mysqli_query($connect, "SELECT * FROM bl_galeri where id_galeri=$id_galeri");
$tampil = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="col-md-12">
		<h3><i class="fa fa-edit"></i> EDIT GALERI</h3>
		<form action="Galeri_PE.php" method="post" enctype="multipart/form-data">
			<table class="table">
				<tr>
					<td></td>
					<td><input type="hidden" class="form-control" name="id_galeri" value="<?php echo $tampil['id_galeri'] ?>" required></td>
				</tr>
				<tr>
					<td>Pilih Album</td>
					<td>
						<select name="id_album" class="form-control">
							<?php
							$sql= "Select * From bl_album order by id_album asc";
							$result=mysqli_query($connect, $sql);
							$no=0;

							if ($tampil['id_album']==0) echo "<option value='0'>-</option>";
							while ($vi = mysqli_fetch_array($result)):
								$no++;
								?>

								<option  <?php if ($tampil['id_album']==$vi['id_album']) echo "selected"; ?> value="<?php echo $vi['id_album']; ?>"><?php echo $vi['nama_album']; ?></option>
							<?php endwhile; ?>
						</select>
						<i style="float: left;font-size: 10px;color: red">( Abaikan jika tidak merubah album )</i></td>
					</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>Gambar Galeri Sebelumnya</td>
					<td><img style="width: 100px; "src="../file/Galeri/<?php echo $tampil['gambar']; ?>"></td>	
				</tr>
				<tr>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>Upload Gambar Galeri Baru</td>
					<td><input type="file" class="form-control" name="gambarbaru">
						<i style="float: left;font-size: 10px;color: red">Abaikan jika tidak merubah gambar</i></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Nama Galeri</td>
						<td><input type="text" class="form-control" name="nama_galeri" value="<?php echo $tampil['nama_galeri'] ?>" required></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" class="btn btn-info" value="Simpan">
							<a href="Galeri.php" class="btn btn-danger">Batal</a></td>
						</tr>
					</table> 
				</form>
			</div>
		</body>
		</html>