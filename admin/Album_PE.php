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
    $sql=mysqli_query($connect, "UPDATE bl_album SET nama_album='$_POST[nama_album]', updated=NOW() WHERE id_album='$_POST[id_album]'");
  }
  else {
    $ekstensi_diperbolehkan = array('png','jpg','images','jpeg');
    $x = explode('.', $gambar);
    $ekstensi = strtolower(end($x));

    if(in_array($ekstensi, $ekstensi_diperbolehkan)===true) {
      $query= mysqli_query($connect, "SELECT * FROM bl_album WHERE id_album='$_POST[id_album]'");
      $nama_gambar=mysqli_fetch_array($query);
      $lokasi=$nama_gambar['gambar'];
      $hapus_gambar="../file/Album/$lokasi";
      unlink($hapus_gambar);

      
      $sql=mysqli_query($connect, "UPDATE bl_album SET gambar='$gambar', nama_album='$_POST[nama_album]', updated=NOW() WHERE id_album='$_POST[id_album]'");
      move_uploaded_file($_FILES['gambarbaru']['tmp_name'],'../file/Album/'.$gambar);
    } else {
      echo "<script> alert('Ekstensi Gambar Tidak Di Perbolehkan');window.location.href='Album.php';</script>";
    }
  }
  echo "<script> alert('Data Berhasil Di Edit');window.location.href='Album.php';</script>";
  ?>
  <?php } ?>