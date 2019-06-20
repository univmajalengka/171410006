<?php
if (isset($_POST['submit'])) {
include "connection.php";
  $nama  = $_POST['nama_ang']; 
  $tmp  = $_POST['tempat_lahir'];
  $tl  = $_POST['tanggal_lahir'];
  $jk  = $_POST['jenis_kelamin'];
  $agama  = $_POST['agama'];
  $jurusan  = $_POST['jurusan'];
  $fakultas  = $_POST['fakultas'];
  $telepon  = $_POST['telepon'];
  $alamat  = $_POST['alamat'];
  $tgl_msk = $_POST['tanggal_masuk'];
  $berlaku = $_POST['berlaku_hingga'];
  $ket = $_POST['keterangan'];
  $query = "INSERT INTO anggota VALUES 
  ('','$nama', '$tmp', '$tl', '$jk','$agama','$jurusan','$fakultas','$telepon','$alamat','$tgl_msk','$berlaku','$ket')";
  $result  = mysqli_query($con, $query);
  if ($result) {
  }

    echo "<script> alert('Input Berhasil'); 
    		document.location.href='tambah_anggota.php';
    </script>";
  } else {
    echo "Input gagal";
  }
  mysqli_close($con);
?>