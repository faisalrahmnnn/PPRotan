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
		<h3><i class="fa fa-user"></i> KELOLA TENTANG</h3>
		<table class="table table-hover">
			<tr>
				<th></th>
				<th></th>
				<th></th>
				<th></th>
			</tr>
			<tr>
				<th class="col-md-1">No</th>
				<th class="col-md-7">Deskripsi Tentang</th>
				<th class="col-md-2">Tanggal & Jam</th>
				<th class="col-md-2">Aksi</th>
			</tr>
			<tr>
				<th></th>
				<th></th>
				<th></th>
				<th></th>
			</tr>
			<?php
			$no=1;
			$query = mysqli_query($connect, "SELECT * FROM bl_tentang");
			while($view=mysqli_fetch_array($query)) {
				?>
				<tr>
					<td><?php echo $no?></td>
					<td><?php echo $view['deskripsi'] ?></td>
					<td><?php echo $view['updated'] ?></td>
					<td><a href="Tentang_E.php?id=<?php echo $view['id_tentang']; ?>" class="btn btn-warning"><span class="fa fa-edit"></span> Edit</a></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>			
			<?php } ?>
		</table>
	</div>
</body>
</html>
