<?php
include("connection.php");
?>
  <link rel="stylesheet" href="css/bootstrap.css">
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
<h3 align="center">Data Peminjaman Buku</h3>
<a href="tambah_pinjam.php" class="btn btn-primary btn-sm">Tambah Data</a><br /><br /> 
<div class="table-responsive">
<table class="table table-striped">
      <tr>
        <th>No</th>
      	<th>ID</th>
        <th>Kode Pengembalian</th>
        <th>Nama Lengkap</th>
        <th>Tanggal Pinjam</th>
        <th>Batas Kembali</th>
        <th>Id Buku</th>
        <th>Jumlah Buku</th>
        <th>Id Petugas</th>
        <th>Tools</th>
      </tr>
    <?php
    $no=1;
    $query=("SELECT * FROM peminjaman");
    $lihat = mysqli_query($con, $query) or die('Error, query failed. ' . mysqli_error());
    $jml_data=mysqli_num_rows($lihat);
    while($r=mysqli_fetch_array($lihat)){
?>
      <tr>
        <td><?php echo"$no.";?></td>
        <td><?php echo"$r[id_anggota]";?></td>
        <td><?php echo"$r[kode_peminjaman]";?></td>
        <td><?php echo "$r[nama]";?></td>
        <td><?php echo "$r[tanggal_pinjam]";?></td>
        <td><?php echo "$r[batas_kembali]";?></td>
        <td><?php echo "$r[id_buku]";?></td>
        <td><?php echo "$r[jumlah_buku]";?></td>
        <td><?php echo "$r[id_petugas]";?></td>
        <td align="center">
            <a href="detail_pinjam.php?halaman=petugas_detail&id=<?php echo"$r[kode_peminjaman]";?>" title="Detail Data" class="btn btn-info btn-sm">Detail<span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span></a>  
            <a href="delete_pinjam.php?halaman=pinjam_delete&kode_peminjaman=<?=$r['kode_peminjaman'];?>" title="Hapus Data" class="btn btn-danger btn-sm">Hapus<span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
            
    </tr>
<?php 
$no++;
} ?>
</table>
</div>