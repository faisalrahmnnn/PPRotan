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
    $sql=mysqli_query($connect, "UPDATE bl_artikel SET judul='$_POST[judul]', deskripsi='$_POST[deskripsi]', updated=NOW() WHERE id_artikel='$_POST[id_artikel]'");
  }
  else {
    $ekstensi_diperbolehkan = array('png','jpg','images','jpeg');
    $x = explode('.', $gambar);
    $ekstensi = strtolower(end($x));

    if(in_array($ekstensi, $ekstensi_diperbolehkan)===true) {
      $query= mysqli_query($connect, "SELECT * FROM bl_artikel WHERE id_artikel='$_POST[id_artikel]'");
      $nama_gambar=mysqli_fetch_array($query);
      $lokasi=$nama_gambar['gambar'];
      $hapus_gambar="../file/Artikel/$lokasi";
      unlink($hapus_gambar);

      
      $sql=mysqli_query($connect, "UPDATE bl_artikel SET gambar='$gambar', judul='$_POST[judul]', deskripsi='$_POST[deskripsi]', updated=NOW() WHERE id_artikel='$_POST[id_artikel]'");
      move_uploaded_file($_FILES['gambarbaru']['tmp_name'],'../file/Artikel/'.$gambar);
    } else {
      echo "<script> alert('Ekstensi Gambar Tidak Di Perbolehkan');window.location.href='Artikel.php';</script>";
    }
  }
  echo "<script> alert('Data Berhasil Di Edit');window.location.href='Artikel.php';</script>";
  ?>
  <?php } ?>