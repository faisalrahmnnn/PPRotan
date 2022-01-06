<?php include 'Header.php';
include 'Config.php';


$batas   = 3;
$halaman = @$_GET['halaman'];
if(empty($halaman)){
	$posisi  = 0;
	$halaman = 1;
}
else{
	$posisi  = ($halaman-1) * $batas;
}
$no=$posisi+1;

$query = mysqli_query($connect, "SELECT * FROM bl_aneka order by updated desc limit $posisi, $batas");
$aktif = 'aneka';

?>


<section id="section" class="section dark green lighten-4">
	<div class="container">
		<div class="row">
			<h3 class=" light center grey-text text-darken-4"> ANEKA </h3>
		</div>
	</div>
</section>

<section id="Tentang" class="Tentang">
	<div class="container">
		<div class="row">
			<?php while($aneka = mysqli_fetch_assoc($query)) : ?>
				<div class="col m5 s12">
					<div class="card-panel">
						<img src="File/Aneka/<?php echo $aneka['gambar'];?>" width="100%;" height="250px;" alt="Cinque Terre">
					</div>
				</div>
				<div class="col m7 s12">
					<div class="card-panel" style="height: 305px;">
						<span style="font-size: 20px;"><?php echo $aneka['nama_aneka'];?></span>
						<hr>
						<span style="font-size: 14px; text-align: justify;"><?php echo $aneka['deskripsi'];?></span>
					</div>	
				</div>
				<?php
			endwhile;
			?>
			<?php
			$sql     = mysqli_query($connect, "select * from bl_aneka");
			$jmldata    = mysqli_num_rows($sql);
			$jmlhalaman = ceil($jmldata/$batas);
			?>
			<div class="text-left">
				<ul class="pagination" style="margin-left: 10px;">
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
	</section>




	<? include 'Footer.php';
	?>

