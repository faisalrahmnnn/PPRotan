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
		<h3><i class="fas fa-mail-bulk"></i> KELOLA PESAN</h3>
		<table class="table table-hover">
			<tr>
				<th></th>
				<th></th>
				<th></th>
				<th></th>
				<th></th>
				<th></th>
			</tr>
			<tr>
				<th class="col-md-1">No</th>
				<th class="col-md-2">Nama</th>
				<th class="col-md-2">Email</th>
				<th class="col-md-2">Pesan</th>
				<th class="col-md-2">Tanggal & Jam</th>
				<th class="col-md-3">Aksi</th>
			</tr>
			<tr>
				<th></th>
				<th></th>
				<th></th>
				<th></th>
				<th></th>
				<th></th>
			</tr>
			<?php
			$no=1;
			$query = mysqli_query($connect, "SELECT * FROM bl_pesan");
			while($view=mysqli_fetch_array($query)) {
				?>
				<tr>
					<td><?php echo $no++?></td>
					<td><?php echo $view['nama'] ?></td>
					<td><?php echo $view['email'] ?></td>
					<td><?php echo $view['pesan'] ?></td>
					<td><?php echo $view['updated'] ?></td>
					<td>

						<a href="Pesan_D.php?id=<?php echo $view['id_pesan']; ?>" class="btn btn-warning"><span class="fa fa-eye"></span> Detail</a>
						<a onclick="if(confirm('Anda Akan Menghapus Data Ini ?')){ location.href='Pesan_H.php?id=<?php echo $view['id_pesan']; ?>' }" class="btn btn-danger"><span class="fa fa-trash-alt"></span> Hapus</a>
					</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
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
