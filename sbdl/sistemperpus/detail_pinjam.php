<?php
include("connection.php");
?>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
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
<h3 align="center">Detail Peminjaman Buku</h3> 
<div class="table-responsive">
<table class="table table-striped">
   <tr>
        <th scope="col">No</th>
        <th scope="col">ID</th>
        <th scope="col">Nama Anggota</th>
        <th scope="col">Id Buku</th>
        <th scope="col">Judul Buku</th>
        <th scope="col">Id Petugas</th>
        <th scope="col">Nama Petugas</th>
        <th scope="col">Tools</th>
      </tr>
    <tr>
<?php
    $no=1;
    $query=("SELECT * FROM View_peminjaman WHERE id_anggota='$_GET[id]'");
    $lihat = mysqli_query($con, $query) or die('Error, query failed. ' . mysqli_error());
    $jml_data=mysqli_num_rows($lihat);
    while($r=mysqli_fetch_array($lihat)){
?>
    <tr>
        <tr>
        <td><?php echo"$no.";?></td>
        <td><?php echo"$r[id_anggota]";?></td>
        <td><?php echo "$r[nama_ang]";?></td>
        <td><?php echo "$r[id_buku]";?></td>
        <td><?php echo "$r[judul_buku]";?></td>
        <td><?php echo "$r[id_petugas]";?></td>
        <td><?php echo "$r[nama_pet]";?></td>
        <td align="center"> 
            <a href="delete_pinjam.php?halaman=pinjam_delete&id_anggota=<?=$r['id_anggota'];?>" title="Hapus Data" class="btn btn-danger btn-sm">Hapus data<span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
        </td>
    
    </tr>
<?php 
$no++;
} ?>
</tr>
</tbody>
</table>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="js/bootstrap.js"></script>

<a href="tampil_pinjam.php" class="btn btn-sm btn-primary">Kembali</a>