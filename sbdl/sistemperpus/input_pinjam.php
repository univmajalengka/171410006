<?php
if (isset($_POST['submit'])) {
include "connection.php";
  $id_ang  = $_POST['id_anggota']; 
  $nama  = $_POST['nama'];
  $tgl  = $_POST['tanggal_pinjam'];
  $bts  = $_POST['batas_kembali'];
  $id_bk  = $_POST['id_buku'];
  $jml  = $_POST['jumlah_buku'];
  $id_pet  = $_POST['id_petugas'];
  $query = "INSERT INTO peminjaman VALUES 
  ('$id_ang','', '$nama', '$tgl', '$bts','$id_bk','$jml','$id_pet')";
  $result  = mysqli_query($con, $query);
  if ($result) {
  }

    echo "<script> alert('Input Berhasil'); 
    		document.location.href='tambah_pinjam.php';
    </script>";
  } else {
    echo "Input gagal";
  }
  mysqli_close($con);
?>