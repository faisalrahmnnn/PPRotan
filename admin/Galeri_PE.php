<?php 
session_start();
if(!isset($_SESSION['username'])){
  header("Location: Index.php");
} else {
  ?>

  <?php 
  include 'Config.php';
  'Header.php';

  $gambar   = $_FILES['gambarbaru']['name'];

  if (empty($gambar)){
    $sql=mysqli_query($connect, "UPDATE bl_galeri SET id_album='$_POST[id_album]', nama_galeri='$_POST[nama_galeri]', updated=NOW() WHERE id_galeri='$_POST[id_galeri]'");
  }

  else {
    $ekstensi_diperbolehkan = array('png','jpg','images','jpeg');
    $x = explode('.', $gambar);
    $ekstensi = strtolower(end($x));

    if(in_array($ekstensi, $ekstensi_diperbolehkan)===true) {
      $query= mysqli_query($connect, "SELECT * FROM bl_galeri WHERE id_galeri='$_POST[id_galeri]'");
      $nama_gambar=mysqli_fetch_array($query);
      $lokasi=$nama_gambar['gambar'];
      $hapus_gambar="../file/Galeri/$lokasi";
      unlink($hapus_gambar);

      
      $sql=mysqli_query($connect, "UPDATE bl_galeri SET id_album='$_POST[id_album]', gambar='$gambar', nama_galeri='$_POST[nama_galeri]', updated=NOW() WHERE id_galeri='$_POST[id_galeri]'");
      move_uploaded_file($_FILES['gambarbaru']['tmp_name'],'../file/Galeri/'.$gambar);
    } else {
      echo "<script> alert('Ekstensi Gambar Tidak Di Perbolehkan');window.location.href='Galeri.php';</script>";
    }
  }
  echo "<script> alert('Data Berhasil Di Edit');window.location.href='Galeri.php';</script>";
  ?>
  <?php } ?>