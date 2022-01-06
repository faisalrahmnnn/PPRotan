<?php include 'Config.php';
$query = mysqli_query($connect, "SELECT * FROM bl_artikel ORDER BY updated ASC LIMIT 5");
?>


<div class="col m4 s12">
	<div class="card-panel">
		<h5>ARTIKEL LAINNYA</h5>
		<hr>
		<?php while($artikel = mysqli_fetch_assoc($query)) : ?>
			<ul class="collection with header">
				<li class="collection-item"><a style="color: black; font-size: 14px;"href="Artikel_D.php?id=<?= $artikel['id_artikel'] ?>"><?= $artikel['judul'] ?></a></li>
			</ul>
		<?php endwhile; ?>
	</div>
</div>
