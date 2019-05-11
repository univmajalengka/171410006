<!DOCTYPE html>
<html lang="en">
<head>
  <title>Data Anggota</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.css">
  <script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>

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


<body>
    <h1>FORM Pengembalian Buku</h1>
    <form action="input_kembali.php" method="post">
        
            <div class="form-group">
                <label for="kode_peminjaman">Kode Peminjaman :</label>
                <input type="text" name="" name="kode_peminjaman" class="form-control" id="kode_peminjaman">
            </div>
            <div class="form-group">
                <label for="nama">Nama :</label>
                <input type="text" name="nama" class="form-control" id="nama">
            </div>
            <div class="form-group">
                <label for="id_buku">Id Buku :</label>
                <input type="text" name="id_buku" class="form-control" id="id_buku">
            </div>
            <div class="form-group">
                <label for="jumlah_buku">Jumlah Buku :</label>
                <input type="text" name="jumlah_buku" class="form-control" id="jumlah_buku">
            </div>
            <div class="form-group">
                <label for="batas_kembali">Batas Kembali :</label>
                <input type="date" name="batas_kembali" class="form-control" id="batas_kembali">
            </div>
            <div class="form-group">
                <label for="tanggal_kembali">Tanggal Pinjam :</label>
                <input type="date" name="tanggal_kembali" class="form-control" id="tanggal_kembali">
            </div>
            <div class="form-group">
                <label for="denda">Denda :</label>
                <input type="text" name="denda" class="form-control" id="denda">
            </div>
            <div class="form-group">
                <label for="jumlah_denda">Jumlah Denda :</label>
                <input type="text" name="jumlah_denda" class="form-control" id="jumlah_denda">
            </div>
            <div class="form-group">
                <label for="ketetangan">Keterangan :</label>
                <input type="text" name="ketetangan"class="form-control" id="keterangan">
            </div>
                <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
            
    </form>
</body>

</html>