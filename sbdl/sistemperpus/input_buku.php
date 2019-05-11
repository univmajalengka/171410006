<?php
if (isset($_POST['submit'])) {
include "connection.php";
  $tgl_entry  = $_POST['tanggal_entry']; 
  $judul  = $_POST['judul_buku'];
  $pengarang  = $_POST['tanggal_lahir'];
  $thn  = $_POST['tahun_terbit'];
  $penerbit  = $_POST['penerbit'];
  $jilid  = $_POST['jilid'];
  $edisi  = $_POST['edisi'];
  $jml  = $_POST['jumlah_buku'];
  $rak  = $_POST['rak_buku'];
  $kategori = $_POST['kategori'];
  $ket = $_POST['keterangan'];
  $query = "INSERT INTO buku VALUES 
  ('','$tgl_entry', '$judul', '$pengarang', '$thn','$penerbit','$jilid','$edisi','$jml','$rak','$kategori','$ket')";
  $result  = mysqli_query($con, $query);
  if ($result) {
  }

    echo "<script> alert('Input Berhasil'); 
    		document.location.href='tambah_buku.php';
    </script>";
  } else {
    echo "Input gagal";
  }
  mysqli_close($con);
?>