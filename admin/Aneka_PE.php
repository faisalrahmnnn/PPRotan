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
    $sql=mysqli_query($connect, "UPDATE bl_aneka SET nama_aneka='$_POST[nama_aneka]', deskripsi='$_POST[deskripsi]', updated=NOW() WHERE id_aneka='$_POST[id_aneka]'");
  }
  else {
    $ekstensi_diperbolehkan = array('png','jpg','images','jpeg');
    $x = explode('.', $gambar);
    $ekstensi = strtolower(end($x));

    if(in_array($ekstensi, $ekstensi_diperbolehkan)===true) {
      $query= mysqli_query($connect, "SELECT * FROM bl_aneka WHERE id_aneka='$_POST[id_aneka]'");
      $nama_gambar=mysqli_fetch_array($query);
      $lokasi=$nama_gambar['gambar'];
      $hapus_gambar="../file/Aneka/$lokasi";
      unlink($hapus_gambar);

      
      $sql=mysqli_query($connect, "UPDATE bl_aneka SET gambar='$gambar', nama_aneka='$_POST[nama_aneka]', deskripsi='$_POST[deskripsi]', updated=NOW() WHERE id_aneka='$_POST[id_aneka]'");
      move_uploaded_file($_FILES['gambarbaru']['tmp_name'],'../file/Aneka/'.$gambar);
    } else {
      echo "<script> alert('Ekstensi Gambar Tidak Di Perbolehkan');window.location.href='Aneka.php';</script>";
    }
  }
  echo "<script> alert('Data Berhasil Di Edit');window.location.href='Aneka.php';</script>";
  ?>
  <?php } ?>