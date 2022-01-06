<?php include 'Header.php';
      include 'Config.php';

$id_tentang = $_GET['id'];
$query= mysqli_query($connect, "SELECT * FROM bl_tentang WHERE id_tentang=$id_tentang");
$tampil = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="col-md-12">
	<h3><i class="fa fa-user"></i> EDIT TENTANG</h3>
	<form action="Tentang_PE.php" method="post">
		<table class="table">
			<tr>
				<td></td>
				<td><input type="hidden" class="form-control" name="id_tentang" value="<?php echo $tampil['id_tentang'] ?>" required></td>
			</tr>
			<tr>
				<td>Deskripsi Tentang</td>
				<td><textarea name="deskripsi" id="ckeditor" class="ckeditor form-control"> <?= $tampil['deskripsi'] ?></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" class="btn btn-info" value="Simpan">
				<a href="Tentang.php" class="btn btn-danger">Batal</a></td>
			</tr>
		</table> 
	</form>
</div>
</body>
</html>