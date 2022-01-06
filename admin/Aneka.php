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
		<h3><i class="fab fa-battle-net"></i> KELOLA ANEKA</h3><hr>
		<a href="Aneka_T.php" class="btn btn-success col-lg-2" style="margin-bottom: 20px"><span class="fa fa-plus-square"></span>  TAMBAH ANEKA</a>
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
				<th class="col-md-2">Gambar Aneka</th>
				<th class="col-md-2">Nama Aneka</th>
				<th class="col-md-3">Deskripsi Aneka</th>
				<th class="col-md-2">Tanggal & Jam</th>
				<th class="col-md-2">Aksi</th>
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
			$batas   = 2;
			$halaman = @$_GET['halaman'];
			if(empty($halaman)){
				$posisi  = 0;
				$halaman = 1;
			}
			else{
				$posisi  = ($halaman-1) * $batas;
			}
			$no=$posisi+1;
			$query = mysqli_query($connect, "SELECT * FROM bl_aneka order by id_aneka desc limit $posisi, $batas");
			while($view=mysqli_fetch_array($query)) {
				?>
				<tr>
					<td><?php echo $no++?></td>
					<td><img style="width: 100px; height: 100px;"src="../file/Aneka/<?php echo $view['gambar']; ?>"></td>
					<td><?php echo $view['nama_aneka'] ?></td>
					<td><?php echo $view['deskripsi'] ?></td>
					<td><?php echo $view['updated'] ?></td>
					<td>
						<a href="Aneka_E.php?id=<?php echo $view['id_aneka']; ?>" class="btn btn-warning"><span class="fa fa-edit"></span> Edit</a>
						<a onclick="if(confirm('Anda Akan Menghapus Data Ini ?')){ location.href='Aneka_H.php?id=<?php echo $view['id_aneka']; ?>' }" class="btn btn-danger"><span class="fa fa-trash-alt"></span> Hapus</a>
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
		<?php
		$sql     = mysqli_query($connect, "select * from bl_aneka");
		$jmldata    = mysqli_num_rows($sql);
		$jmlhalaman = ceil($jmldata/$batas);
		?>
		<div class="text-left">
			<ul class="pagination">
				<?php
				for($i=1;$i<=$jmlhalaman;$i++) {
					if ($i != $halaman) {
						echo "<li class='page-item'><a class='page-link' href='Aneka.php?halaman=$i'>$i</a></li>";
					} else {
						echo "<li class='page-item active'><a class='page-link' href='Aneka.php'>$i</a></li>";
					}
				}
				?>
			</ul>
		</div>
	</div>
</body>
</html>