<?php include 'Header.php';
include 'Config.php';


if (!isset($_GET['id']) || $_GET['id'] == '') header('Location: Index.php');
$id_artikel = $_GET['id'];
$query = mysqli_query($connect, "SELECT * FROM bl_artikel WHERE id_artikel = $id_artikel");
$artikel = mysqli_fetch_assoc($query);
$aktif = 'artikel';

?>


<section id="Tentang" class="Tentang">
	<div class="container">
		<div class="row">
			<div class="col m8 s12">
				<div class="card-panel">
					<span class="tgl" style="display: block; font-family: multilight; font-size: 12px; color: #888"><?= date('d M y', strtotime($artikel['updated'])) ?></span>
					<span class="judul" style="font-family: mulilight; font-size: 20px; text-align: justify;"><?=$artikel['judul']?></span>
					<hr>
					<img src="file/artikel/<?= $artikel['gambar'] ?>" alt="" width="560px" Height="300px">
					<?= $artikel['deskripsi'] ?>
				</div>
			</div>
			<?php require_once 'Sidebar.php'; ?>
		</div>
	</div>
</div>
</section>
<?php include 'Footer.php';
?>