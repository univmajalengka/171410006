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
<h3 align="center">Data Buku Perpustakaan</h3>
<a href="tambah_buku.php" class="btn btn-primary btn-sm">Tambah Data</a><br /><br /> 
<div class="table-responsive">
<table class="table table-striped">
      <tr>
      	<th>No</th>
        <th>Id Buku</th>
        <th>Tanggal Entry</th>
        <th>Judul</th>
        <th>Pengarang</th>
        <th>Tahun Terbit</th>
        <th>Penerbit</th>
        <th>Jilid</th>
        <th>Edisi</th>
        <th>Jumlah Buku</th>
        <th>Rak Buku</th>
        <th>Kategori</th>
        <th>Keterangan</th>
        <th>Tools</th>
      </tr>
    <tr>
    <?php
    $no=1;
    $query=("SELECT * FROM buku");
    $lihat = mysqli_query($con, $query) or die('Error, query failed. ' . mysqli_error());
    $jml_data=mysqli_num_rows($lihat);
    while($r=mysqli_fetch_array($lihat)){
?>
      <tr>
        <td><?php echo"$no.";?></td>
        <td><?php echo"$r[id_buku]";?></td>
        <td><?php echo"$r[tanggal_entry]";?></td>
        <td><?php echo "$r[judul_buku]";?></td>
        <td><?php echo "$r[pengarang]";?></td>
        <td><?php echo "$r[tahun_terbit]";?></td>
        <td><?php echo "$r[penerbit]";?></td>
        <td><?php echo "$r[jilid]";?></td>
        <td><?php echo "$r[edisi]";?></td>
        <td><?php echo "$r[jumlah_buku]";?></td>
        <td><?php echo "$r[rak_buku]";?></td>
        <td><?php echo "$r[kategori]";?></td>
        <td><?php echo "$r[keterangan]";?></td>
        <td align="center">
            <a href="detail_buku.php?halaman=buku_detail&id=<?php echo"$r[id_buku]";?>" title="Detail Data" class="btn btn-info btn-sm">Detail<span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span></a>  
            <a href="delete_buku.php?halaman=buku_delete&id_buku=<?=$r['id_buku'];?>" title="Hapus Data" class="btn btn-danger btn-sm">Hapus<span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
            
    </tr>
<?php 
$no++;
} ?>
</table>
</div>