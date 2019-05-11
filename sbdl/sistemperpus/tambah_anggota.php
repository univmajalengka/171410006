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
    <h1>FORM PENDAFTARAN ANGGOTA</h1>
    <form action="input_anggota.php" method="post">
        <div class="form-group">
                <label for="nama">Nama Lengkap :</label>
                <input type="text" name="nama" class="form-control" id="nama">
            </div>
            <div class="form-group">
                <label for="tempat_lahir">Tempat Lahir :</label>
                <input type="text" name="tempat_lahir"class="form-control" id="tempat_lahir">
            </div>
            <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir :</label>
                <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir">
            </div>
            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin :</label>
                <select name="jenis_kelamin" class="form-control" id="jenis_kelamin">
                    <option value="pilih">--Pilih--</option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
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
                <label for=fakultas>Fakultas :</label>
                <select name="fakultas" class="form-control" id="fakultas">
                    <option value="pilih">--Pilih--</option>
                    <option value="teknik">FT</option>
                    <option value="ilmu sosial dan politik">FISIP</option>
                    <option value="keguruan dan ilmu pendidikan">FKIP</option>
                    <option value="ekonomi dan bisnis">FEB</option>
                    <option value="pertanian">FAPERTA</option>
                    <option value="agama islam">FAI</option>
                    <option value="ilmu hukum">FH</option>
                </select>
            </div>
            <div class="form-group">
                <label for=jurusan>Jurusan :</label>
                <select name="jurusan" class="form-control" id="jurusan">
                    <option value="pilih">--Pilih--</option>
                    <option value="informatika">Informatika</option>
                    <option value="mesin">Teknik Mesin</option>
                    <option value="sipil">Teknik Sipil</option>
                    <option value="industri">Teknik Industri</option>
                    <option value="ilmu administrasi negara">Ilmu Administrasi Negara</option>
                    <option value="ilmu komunkasi">Ilmu Komunkasi</option>
                    <option value="bahasa dan sastra indonesia">Pendidikan Bahasa dan Sastra Indonesia</option>
                    <option value="penjaskerek">PJKR</option>
                    <option value="bahasa inggris">Pendidikan Bahasa Ingris</option>
                    <option value="manajemen">Manajemen</option>
                    <option value="akutansi">akutansi</option>
                    <option value="agroteknologi">Agroteknologi</option>
                    <option value="agribisnis">Agribisnis</option>
                    <option value="peternakan">Peternakan</option>
                    <option value="PAI">Pendidikan Agama Islam</option>
                    <option value="ekonomi syari`ah">Ekonomi Syari'ah</option>
                    <option value="pendidikan islam anak usia dini">Pendidikan Islam Anak Usia Dini</option>
                    <option value="ilmu hukum">Ilmu Hukum</option>
                </select>
            </div>
            <div class="form-group">
                <label for=telepon>Telepon :</label>
                <input type="text" name="telepon" class="form-control" id="telepon">
            </div>
            <div class="form-group">
                <label for="alamat">alamat :</label>
                <input type="text" name="alamat" class="form-control" id="alamat">
            </div>
            <div class="form-group">
                <label for="tanggal_masuk">Tanggal Masuk :</label>
                <input type="date" name="tanggal_masuk"class="form-control" id="tanggal_masuk">
            </div>
            <div class="form-group">
                <label for="berlaku_hingga">Berlaku Hingga :</label>
                <input type="date" name="berlaku_hingga" class="form-control" id="berlaku_hingga">
            </div>
            <div class="form-group">
                <label for="keterangan">keterangan :</label>
                <input type="text" name="keterangan" class="form-control" id="keterangan">
            </div>
                <button type="submit" name="submit"  class="btn btn-primary">Simpan</button>
            
    </form>
</body>

</html>