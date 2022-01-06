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

$query = mysqli_query($connect, "SELECT * FROM bl_artikel order by updated desc limit $posisi, $batas");
$aktif = 'artikel';
?>

<section id="section" class="section dark green lighten-4">
	<div class="container">
		<div class="row">
			<h3 class=" light center grey-text text-darken-4"> ARTIKEL </h3>
		</div>
	</div>
</section>

<style type="text/css">
	span.tgl {
		font-size: 12px;
		color: #888;
		display: block;
	}
	span.judul  {
		text-decoration: none;
		font-size: 20px;
		color: black;
		display: block;
		transition: .35s;
		margin-bottom: 10px;
	}
</style>


<section id="Tentang" class="Tentang">
	<div class="container">
		<div class="row">
			<div class="col m8 s12">
				<div class="card-panel">
					<h5>ARIKEL TERBARU</h5>
					<hr>
					<?php while($artikel = mysqli_fetch_assoc($query)) : ?>
						<div class="artikel">
							<span class="tgl"><?= date('d M y', strtotime($artikel['updated'])) ?></span>
							<span class="judul"><?=$artikel['judul'] ?></span>
							<img src="file/artikel/<?= $artikel['gambar'] ?>" alt="" width="560px" Height="300px">
							<span class="deskripsi" style="font-size: 14px;"><?= substr($artikel['deskripsi'], 0, 200) . ' . . .' ?></span>
							<div class="card-action">
								<a href="Artikel_D.php?id=<?= $artikel['id_artikel'] ?>" style="color: orange; font-size: 14px;">Baca Selengkapnya . . .</a>
							</div>
						</div>
						<hr>
					<?php endwhile; ?>
					<?php
					$sql     = mysqli_query($connect, "select * from bl_artikel");
					$jmldata    = mysqli_num_rows($sql);
					$jmlhalaman = ceil($jmldata/$batas);
					?>
					<div class="text-left">
						<ul class="pagination">
							<?php
							for($i=1;$i<=$jmlhalaman;$i++) {
								if ($i != $halaman) {
									echo "<li class='page-item'><a class='page-link' href='Artikel.php?halaman=$i'>$i</a></li>";
								} else {
									echo "<li class='page-item active'><a class='page-link' href='Artikel.php'>$i</a></li>";
								}
							}
							?>
						</ul>
					</div>
				</div>
			</div>
			<?php require_once 'Sidebar.php'; ?>
		</div>
	</div>
</div>
</section>
<?php include 'Footer.php';
?>