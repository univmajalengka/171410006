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
  </div>
</nav> 


<body>
    <h1>FORM PETUGAS</h1>
    <form action="input_petugas.php" method="post">
       
            <div class="form-group">
                <label for="nama">Nama Lengkap :</label>
                <input type="text" name="nama" class="form-control" id="nama">
            </div>
            <div class="form-group">
                <label for="tempat_lahir">Tempat Lahir :</label>
                <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir">
            </div>
            <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir :</label>
                <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir">
            </div>
            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin :</label>
                <select name="jenis_kelamin" class="form-control" id="jenis_kelamin">
                    <option value="pilih">--Pilih--</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="agama">Agama :</label>
                <select name="agama" class="form-control" id="agama">
                    <option value="pilih">--Pilih--</option>
                    <option value="Islam">Islam</option>
                    <option value="kristen">Kristen</option>
                    <option value="Hindu">Hindu</option>
                    <option value="buddha">Buddha</option>
                </select>
            </div>
            <div class="form-group">
                <label for=telepon>Telepon :</label>
                <input type="text" name="telepon"class="form-control" id="telepon">
            </div>
            <div class="form-group">
                <label for="status">Status :</label>
                <select name="status" class="form-control" id="status">
                    <option value="pilih">--Pilih--</option>
                    <option value="Laki-laki">Menikah</option>
                    <option value="Perempuan">Belum Menikah</option>
                </select>
            </div>
            <div class="form-group">
                <label for="alamat">alamat :</label>
                <input type="text" name="alamat" class="form-control" id="alamat">
            </div>
                <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
            
    </form>
</body>

</html>