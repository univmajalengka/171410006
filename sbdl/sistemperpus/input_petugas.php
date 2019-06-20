<?php
if (isset($_POST['submit'])) {
include "connection.php";
  $nama  = $_POST['nama_pet']; 
  $tmp  = $_POST['tempat_lahir'];
  $tl  = $_POST['tanggal_lahir'];
  $jk  = $_POST['jenis_kelamin'];
  $agama  = $_POST['agama'];
  $telepon  = $_POST['telepon'];
  $status  = $_POST['status'];
  $alamat  = $_POST['alamat'];
  $query = "INSERT INTO petugas VALUES 
  ('','$nama', '$tmp', '$tl', '$jk','$agama','$telepon','$status','$alamat')";
  $result  = mysqli_query($con, $query);
  if ($result) {
  }

    echo "<script> alert('Input Berhasil'); 
    		document.location.href='tambah_petugas.php';
    </script>";
  } else {
    echo "Input gagal";
  }
  mysqli_close($con);
?>