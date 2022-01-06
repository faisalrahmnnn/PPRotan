<?php include 'Header.php';
include 'Config.php';
?>



<section id="section" class="section dark green lighten-4">
	<div class="container">
		<div class="row">
			<h3 class=" light center grey-text text-darken-4"> ALBUM </h3>
		</div>
	</div>
</section>


<div class="container">
	<br>
	<div class="row">
		<?php
		$query = mysqli_query($connect, "SELECT * FROM bl_album order by updated desc");
		while ($data = mysqli_fetch_array($query)):
			?>
			<div class="col m4 s12">
				<div class="card-panel">
					<img src="File/Album/<?php echo $data['gambar'];?>" width="100%;" height="240px;" alt="Cinque Terre">
					<div class="caption">
						<p style="font-size: 20px; text-align: center;"><?php echo $data['nama_album'];?></p>
						<p><a href="Galeri_D.php?id=<?php echo $data['id_album'];?>" class="btn btn-light btn-block" role="button">Lihat Galeri</a></p>
					</div>
				</div>
			</div>
			<?php
		endwhile;
		?>
	</div>
</div>


