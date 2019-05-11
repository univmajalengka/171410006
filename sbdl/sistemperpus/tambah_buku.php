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
    <h1>FORM BUKU MASUK</h1>
    <form action="input_buku.php" method="post">
        <div class="form-group">
                <label for="tanggal_entry">Tanggal Entry :</label>
                <input type="date" name="tanggal_entry"class="form-control" id="tanggal_entry">
            </div>
            <div class="form-group">
                <label for="judul_buku">Judul  Buku :</label>
                <input type="text" name="judul_buku" class="form-control" id="judul_buku">
            </div>
            <div class="form-group">
                <label for="pengarang">Pengarang :</label>
                <input type="text" name="pengarang" class="form-control" id="Pengarang">
            </div>
            <div class="form-group">
                <label for="tahun_terbit">Tahun Terbit :</label>
                <input type="month" name="tahun_terbit" class="form-control" id="tahun_terbit">
            </div>
            <div class="form-group">
                <label for="penerbit">Penerbit :</label>
                <input type="text" name="penerbit" class="form-control" id="Penerbit">
            </div>
            <div class="form-group">
                <label for="jilid">Jilid :</label>
                <input type="text" name="jilid" class="form-control" id="Jilid">
            </div>
            <div class="form-group">
                <label for="edisi">Edisi :</label>
                <input type="text" name="edisi" class="form-control" id="edisi">
            </div>
            <div class="form-group">
                <label for=jumlah_buku>Jumlah Buku :</label>
                <input type="text" name="jumlah_buku" class="form-control" id="jumlah_buku">
            </div>
            <div class="form-group">
                <label for="rak_buku">Rak Buku :</label>
                <input type="text" name="rak_buku" class="form-control" id="rak_buku">
            </div>
            <div class="form-group">
                <label for="kategori">Kategori :</label>
                <input type="text" name="kategori" class="form-control" id="kategori">
            </div>
            <div class="form-group">
                <label for="keterangan">keterangan :</label>
                <input type="text" name="keterangan"class="form-control" id="keterangan">
            </div>
                <button type="submit" name="submit" class="btn btn-primary">Simpan</button>


    </form>
</body>

</html>