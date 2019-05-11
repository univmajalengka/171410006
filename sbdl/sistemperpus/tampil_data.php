<?php
include("connection.php");
?>
  <link rel="stylesheet" href="css/bootstrap.css">
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>

 <nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">SimPerpus</a>

  <!-- Toggler/collapsibe Button -->
  
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tampil_data.php">Anggota</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tampil_petugas.php">Petugas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tampil_buku.php">Buku</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tampil_pinjam.php">Peminjaman</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tampil_kembali.php">Pengembalian</a>
      </li>
    </ul>
  
</nav> 
<div class="container">
<h3 align="center">Data Anggota</h3>
<a href="tambah_anggota.php" class="btn btn-primary btn-sm">Tambah Data</a><br /><br /> 
<div class="table-responsive">
<table class="table table-striped">
    <tr>
        <th>No</th>
        <th>ID</th>
        <th>Nama Lengkap</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Jenis Kelamin</th>
        <th>Agama</th>
        <th>Jurusan</th>
        <th>Fakultas</th>
        <th>Telepon</th>
        <th>Alamat</th>
        <th>Tanggal Masuk</th>
        <th>Berlaku Hingga</th>
        <th>Keterangan</th>
        <th>Tools</th>
    </tr>
<?php
    $no=1;
    $query=("SELECT * FROM anggota");
    $lihat = mysqli_query($con, $query) or die('Error, query failed. ' . mysqli_error());
    $jml_data=mysqli_num_rows($lihat);
    while($r=mysqli_fetch_array($lihat)){
?>
    <tr>
        <td><?php echo"$no.";?></td>
        <td><?php echo"$r[id_anggota]";?></td>
        <td><?php echo "$r[nama]";?></td>
        <td><?php echo "$r[tempat_lahir]";?></td>
        <td><?php echo "$r[tanggal_lahir]";?></td>
        <td><?php echo "$r[jenis_kelamin]";?></td>
        <td><?php echo "$r[agama]";?></td>
        <td><?php echo "$r[jurusan]";?></td>
        <td><?php echo "$r[fakultas]";?></td>
        <td><?php echo "$r[telepon]";?></td>
        <td><?php echo "$r[alamat]";?></td>
        <td><?php echo "$r[tanggal_masuk]";?></td>
        <td><?php echo "$r[berlaku_hingga]";?></td>
        <td><?php echo "$r[keterangan]";?></td>
        <td align="center">
            <a href="detail_anggota.php?halaman=id_anggota&id=<?=$r['id_anggota'];?>" title="Detail Data" class="btn btn-info btn-sm">Detail<span class="ico fa-search-plus" aria-hidden="true"></span></a>
            <a href="delete_anggota.php?halaman=user_delete&id_anggota=<?=$r['id_anggota'];?>" title="Hapus Data" class="btn btn-danger btn-sm">Hapus<span class="icon fa-trash" aria-hidden="true"></span></a>
            
    </tr>
<?php 
$no++;
} ?>
</table>
</div>