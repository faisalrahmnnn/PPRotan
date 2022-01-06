<?php include 'Header.php';
include 'Script.php';
include 'Config.php';
$query = mysqli_query($connect, "SELECT * FROM bl_tentang");
$Tentang = mysqli_fetch_assoc($query);
$aktif = 'Tentang'; 
?>

<section id="section" class="section dark green lighten-4">
  <div class="container">
    <div class="row">
      <h3 class=" light center grey-text text-darken-4"> TENTANG </h3>
    </div>
  </div>
</section>
<br>

<section id="Tentang" class="Tentang">
  <div class="container">
    <div class="row">
      <div class="col m7 s12">
        <div class="card-panel" style="height: 630px;">
          <?= $Tentang['deskripsi'] ?>
        </div>
      </div>
      <div class="col m5 s12">
        <form action="admin/Tentang_PT.php" method="post" enctype="multipart/form-data">
          <div class="card-panel">
            <h5>Kritik & Saran</h5>
            <div class="input-field">
              <input type="text" name="nama" id="name" required class="validate">
              <label for="name"> Nama </label>    
            </div>
            <div class="input-field">
              <input type="email" name="email" id="email" required class="validate">
              <label for="email"> Email </label>    
            </div>
            <div class="input-field">
              <textarea name="pesan" id="pesan"required class="materialize-textarea"></textarea>
              <label for="message"> Pesan </label>    
            </div>
            <button class="btn waves-effect waves-light" type="submit" name="action">Kirim<i class="material-icons right">send</i>
            </button>
          </div>
          <div class="card-panel">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d63789.46941526654!2d113.8899091!3d-2.213297!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dfcbf116a995427%3A0xfa758015ddea8a0a!2sPalangkaraya%2C%20Kec.%20Jekan%20Raya%2C%20Kota%20Palangka%20Raya%2C%20Kalimantan%20Tengah!5e0!3m2!1sid!2sid!4v1623597900727!5m2!1sid!2sid" width="100%" height="205px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
        </form>
      </div>
    </div>
  </section>
  <?php include 'Footer.php';
  ?>