<?php include 'Header.php';
include 'Config.php';


if (!isset($_GET['id']) || $_GET['id'] == '') header('Location: Index.php');
$id_album = $_GET['id'];
?>

<section id="section" class="section dark green lighten-4">
	<div class="container">
		<div class="row">
			<h3 class=" light center grey-text text-darken-4"> GALERI </h3>
		</div>
	</div>
</section>


<div class="container">
	<br>
	<div class="row">
		<?php
		$query = mysqli_query($connect, "SELECT * FROM bl_galeri WHERE id_album = $id_album order by updated desc");
		while ($data = mysqli_fetch_array($query)):
			?>
			<div class="col m4 s12">
				<div class="card-panel">
					<a href="File/Galeri/<?php echo $data['gambar'];?>">
						<img src="File/Galeri/<?php echo $data['gambar'];?>" width="100%;" height="240px;" alt="Cinque Terre">
						<div class="caption">
							<p style="font-size: 14px; text-align: center; color: black;"><?php echo $data['nama_galeri'];?></p>
						</div>
					</div>
				</div>
				<?php
			endwhile;
			?>
		</div>
	</div>