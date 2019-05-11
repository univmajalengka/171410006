<?php
if (isset($_POST['submit'])) {
include "connection.php";
  $kd  = $_POST['kode_peminjaman']; 
  $nama  = $_POST['nama'];
  $id_bk  = $_POST['id_buku'];
  $jml  = $_POST['jumlah_buku'];
  $bts  = $_POST['batas_kembali'];
  $tgl  = $_POST['tanggal_kembali'];
  $denda  = $_POST['denda'];
  $jml_denda  = $_POST['jumlah_denda'];
  $ket  = $_POST['keterangan'];
  $query = "INSERT INTO pengembalian VALUES 
  ('','$kd', '$nama', '$id_bk', '$jml','$bts','$tgl','$denda','$jml_denda','$ket')";
  $result  = mysqli_query($con, $query);
  if ($result) {
  }

    echo "<script> alert('Input Berhasil'); 
    		document.location.href='tambah_kembali.php';
    </script>";
  } else {
    echo "Input gagal";
  }
  mysqli_close($con);
?>