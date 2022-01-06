<?php include 'Header.php';
include 'Config.php';

$id_admin = $_GET['id'];
$query= mysqli_query($connect, "SELECT * FROM bl_admin WHERE id_admin=$id_admin");
$tampil = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="col-md-12">
		<h3><i class="fa fa-edit"></i> EDIT ADMIN</h3>
		<form action="Admin_PE.php" method="post">
			<table class="table">
				<tr>
					<td></td>
					<td><input type="hidden" class="form-control" name="id_admin" value="<?php echo $tampil['id_admin'] ?>" required></td>
				</tr>
				<tr>
					<td>Username</td>
					<td><input type="text" class="form-control" name="username" value="<?php echo $tampil['username'] ?>" required></td>
				</tr>
				<tr>
					<td></td> 
					<td></td>
				</tr>
				<tr>
					<td>Password Baru</td>
					<td><input type="text" class="form-control" name="password_baru">
						<i style="float: left;font-size: 10px;color: red"> ( Abaikan jika tidak merubah password )</i></td>
					</tr>
					<tr>
						<td></td> 
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" class="btn btn-info" value="Simpan">
							<a href="Admin.php" class="btn btn-danger">Batal</a></td>
						</tr>
					</table> 
				</form>
			</div>
		</body>
		</html>