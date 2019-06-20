-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 20 Jun 2019 pada 09.52
-- Versi server: 5.7.24
-- Versi PHP: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sbdl`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

DROP TABLE IF EXISTS `anggota`;
CREATE TABLE IF NOT EXISTS `anggota` (
  `id_anggota` int(15) NOT NULL AUTO_INCREMENT,
  `nama_ang` varchar(60) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `agama` varchar(15) NOT NULL,
  `jurusan` varchar(40) NOT NULL,
  `fakultas` varchar(25) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `alamat` varchar(60) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `berlaku_hingga` date NOT NULL,
  `keterangan` varchar(25) NOT NULL,
  PRIMARY KEY (`id_anggota`),
  KEY `nama` (`nama_ang`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nama_ang`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `jurusan`, `fakultas`, `telepon`, `alamat`, `tanggal_masuk`, `berlaku_hingga`, `keterangan`) VALUES
(1, 'drian', 'jakarta', '1995-03-04', 'L', 'islam', 'informatika', 'teknik', '087223145667', 'desa beber', '2019-03-01', '2019-09-01', ''),
(2, 'andi', 'majalengka', '1997-02-03', 'L', 'Islam', 'sipil', 'teknik', '082314667009', 'desa kertasari', '2019-03-02', '2019-09-02', ''),
(3, 'linda', 'sumedang', '2000-01-07', 'P', 'islam', 'informatika', 'teknik', '089776543212', 'desa jatitengah', '2019-03-03', '2019-09-03', ''),
(4, 'siti', 'kuningan', '1998-05-02', 'P', 'islam', 'manajemen', 'ekonomi', '087765443219', 'desa kasokandel', '2019-03-04', '2019-09-04', ''),
(5, 'dedi', 'cirebon', '1996-03-05', 'L', 'Islam', 'ilmu hukum', 'hukum', '085543221336', 'desa kertajati', '2019-03-05', '2019-09-05', ''),
(6, 'sinta', 'indramayu', '1999-03-11', 'P', 'islam', 'pgsd', 'ilmu pendidikan', '', 'desa sutawangi', '2019-03-06', '2019-09-06', ''),
(7, 'layla', 'majalengka', '1995-01-20', 'P', 'islam', 'sipil', 'teknik', '085334209887', 'desa pakubeureum', '2019-03-07', '2019-09-07', ''),
(8, 'benny', 'sumedang', '2019-05-01', 'L', 'islam', 'mesin', 'teknik', '081345667809', 'desa kulur', '2019-03-08', '2019-09-08', ''),
(9, 'dandi', 'majalengka', '1996-04-09', 'L', 'islam', 'informatika', 'teknik', '', 'desa lianjulang', '2019-03-09', '2019-09-09', ''),
(10, 'diana', 'majalengka', '2000-06-01', 'P', 'islam', 'pai', 'pai', '088651432665', 'desa babakan', '2019-03-10', '2019-09-10', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

DROP TABLE IF EXISTS `buku`;
CREATE TABLE IF NOT EXISTS `buku` (
  `id_buku` int(15) NOT NULL AUTO_INCREMENT,
  `tanggal_entry` date NOT NULL,
  `judul_buku` varchar(60) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `tahun_terbit` varchar(5) NOT NULL,
  `penerbit` varchar(30) NOT NULL,
  `jilid` int(5) NOT NULL,
  `edisi` int(5) NOT NULL,
  `jumlah_buku` int(5) NOT NULL,
  `rak_buku` varchar(5) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `keterangan` varchar(30) NOT NULL,
  PRIMARY KEY (`id_buku`)
) ENGINE=InnoDB AUTO_INCREMENT=121 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id_buku`, `tanggal_entry`, `judul_buku`, `pengarang`, `tahun_terbit`, `penerbit`, `jilid`, `edisi`, `jumlah_buku`, `rak_buku`, `kategori`, `keterangan`) VALUES
(111, '2018-04-02', 'belajar pemograman php ', 'didin rudini', '2017', 'pt.cipta karya', 1, 1, 10, '3b', 'informatika', ''),
(112, '2017-06-06', 'arsitektur jalan', 'dadan romadhoni', '2009', 'gramedia', 0, 0, 3, '3c', 'teknik sipil', ''),
(113, '2013-04-30', 'membuat sistem pakar berbasis android', 'deden awaludin', '2007', 'gramedia', 1, 1, 3, '3b', 'informatika', ''),
(114, '2010-04-16', 'manajemen perekonomian', 'roni hidayat', '2005', 'gramedia', 0, 0, 3, '5a', 'ekonomi', ''),
(115, '2017-03-03', 'ilmu hukum pidana', 'iqbal assegaf', '2003', 'gramedia', 3, 10, 5, '1a', 'ilmu hukum', ''),
(116, '2012-04-02', 'psikologi pendidikan', 'crisda purnama', '2010', 'gramedia', 2, 9, 2, '2c', 'psikologi', ''),
(117, '2011-04-10', 'arsitektur bangunan', 'rifki taufik', '2006', 'gramedia', 2, 2, 8, '3c', 'teknik sipil', ''),
(118, '2018-05-08', 'teknik mesin dasar', 'asep bambang', '2010', 'pt.cipta karya', 0, 0, 4, '3a', 'mesin', ''),
(119, '2009-04-01', 'belajar bahasa pemograman java', 'iqbal rizmaya', '2007', 'gramedia', 0, 0, 4, '3b', 'informatika', ''),
(120, '2018-04-02', 'kumpulan hadist', 'nana sutrisna', '2001', 'gramedia', 0, 0, 5, '7a', 'agama', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

DROP TABLE IF EXISTS `peminjaman`;
CREATE TABLE IF NOT EXISTS `peminjaman` (
  `id_anggota` int(15) NOT NULL,
  `kode_peminjaman` int(15) NOT NULL AUTO_INCREMENT,
  `nama_ang` varchar(60) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `batas_kembali` date NOT NULL,
  `id_buku` int(15) NOT NULL,
  `jumlah_buku` int(5) NOT NULL,
  `id_petugas` int(15) NOT NULL,
  PRIMARY KEY (`kode_peminjaman`),
  KEY `id_buku` (`id_buku`),
  KEY `batas_kembali` (`batas_kembali`),
  KEY `id_petugas` (`id_petugas`),
  KEY `jumlah_buku` (`jumlah_buku`),
  KEY `nama` (`nama_ang`),
  KEY `id_anggota` (`id_anggota`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`id_anggota`, `kode_peminjaman`, `nama_ang`, `tanggal_pinjam`, `batas_kembali`, `id_buku`, `jumlah_buku`, `id_petugas`) VALUES
(1, 21, 'drian', '2019-04-01', '2019-04-11', 111, 1, 11),
(2, 22, 'andi', '2019-04-01', '2019-04-11', 112, 1, 11),
(3, 23, 'linda', '2019-04-01', '2019-04-11', 113, 1, 11),
(4, 24, 'siti', '2019-04-01', '2019-04-11', 114, 1, 11),
(5, 25, 'dedi', '2019-04-01', '2019-04-11', 115, 1, 11),
(6, 26, 'sinta', '2019-04-01', '2019-04-11', 116, 1, 11),
(7, 27, 'layla', '2019-04-01', '2019-04-11', 117, 1, 11),
(8, 28, 'benny', '2019-04-01', '2019-04-11', 118, 1, 11),
(9, 29, 'dandi', '2019-04-01', '2019-04-11', 119, 1, 11),
(10, 30, 'diana', '2019-04-01', '2019-04-11', 120, 1, 11);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengembalian`
--

DROP TABLE IF EXISTS `pengembalian`;
CREATE TABLE IF NOT EXISTS `pengembalian` (
  `id_anggota` int(15) NOT NULL,
  `kode_peminjaman` int(15) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `id_buku` varchar(15) NOT NULL,
  `jumlah_buku` int(5) NOT NULL,
  `batas_kembali` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `denda` varchar(15) NOT NULL,
  `jumlah_denda` varchar(30) NOT NULL,
  `keterangan` varchar(30) NOT NULL,
  PRIMARY KEY (`id_anggota`),
  KEY `kode_peminjaman` (`kode_peminjaman`),
  KEY `batas_kembali` (`batas_kembali`),
  KEY `jumlah_buku` (`jumlah_buku`),
  KEY `nama` (`nama`),
  KEY `id_buku` (`id_buku`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengembalian`
--

INSERT INTO `pengembalian` (`id_anggota`, `kode_peminjaman`, `nama`, `id_buku`, `jumlah_buku`, `batas_kembali`, `tanggal_kembali`, `denda`, `jumlah_denda`, `keterangan`) VALUES
(1, 21, 'drian', '111', 1, '2019-04-11', '2019-04-11', '', '', ''),
(2, 22, 'andi', '112', 1, '2019-04-11', '2019-04-12', '500', '500', ''),
(3, 23, 'linda', '113', 1, '2019-04-11', '2019-04-11', '', '', ''),
(4, 24, 'siti', '114', 1, '2019-04-11', '2019-04-11', '', '', ''),
(5, 25, 'dedi', '115', 1, '2019-04-11', '2019-04-11', '', '', ''),
(6, 26, 'sinta', '116', 1, '2019-04-11', '2019-04-11', '', '', ''),
(7, 27, 'layla', '117', 1, '2019-04-11', '2019-04-11', '', '', ''),
(8, 28, 'benny', '118', 1, '2019-04-11', '2019-04-11', '', '', ''),
(9, 29, 'dandi', '119', 1, '2019-04-11', '2019-04-11', '', '', ''),
(10, 30, 'diana', '120', 1, '2019-04-11', '2019-04-11', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

DROP TABLE IF EXISTS `petugas`;
CREATE TABLE IF NOT EXISTS `petugas` (
  `id_petugas` int(15) NOT NULL AUTO_INCREMENT,
  `nama_pet` varchar(60) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `agama` varchar(15) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `status` varchar(20) NOT NULL,
  `alamat` varchar(60) NOT NULL,
  PRIMARY KEY (`id_petugas`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_pet`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `telepon`, `status`, `alamat`) VALUES
(11, 'eko julianto', 'majalengka', '1965-04-23', 'L', 'islam', '087723433190', 'nikah', 'desa kasokandel');

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `view_anggota`
-- (Lihat di bawah untuk tampilan aktual)
--
DROP VIEW IF EXISTS `view_anggota`;
CREATE TABLE IF NOT EXISTS `view_anggota` (
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `view_peminjaman`
-- (Lihat di bawah untuk tampilan aktual)
--
DROP VIEW IF EXISTS `view_peminjaman`;
CREATE TABLE IF NOT EXISTS `view_peminjaman` (
`id_anggota` int(15)
,`nama_ang` varchar(60)
,`id_buku` int(15)
,`id_petugas` int(15)
,`judul_buku` varchar(60)
,`nama_pet` varchar(60)
);

-- --------------------------------------------------------

--
-- Struktur untuk view `view_anggota`
--
DROP TABLE IF EXISTS `view_anggota`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_anggota`  AS  select `a`.`id_anggota` AS `id_anggota`,`c`.`nama` AS `nama`,`a`.`jurusan` AS `jurusan`,`a`.`fakultas` AS `fakultas` from (`anggota` `a` join `peminjaman` `c` on((`c`.`id_anggota` = `a`.`id_anggota`))) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `view_peminjaman`
--
DROP TABLE IF EXISTS `view_peminjaman`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_peminjaman`  AS  select `a`.`id_anggota` AS `id_anggota`,`a`.`nama_ang` AS `nama_ang`,`a`.`id_buku` AS `id_buku`,`a`.`id_petugas` AS `id_petugas`,`b`.`judul_buku` AS `judul_buku`,`c`.`nama_pet` AS `nama_pet` from ((`peminjaman` `a` join `buku` `b` on((`b`.`id_buku` = `a`.`id_buku`))) join `petugas` `c` on((`c`.`id_petugas` = `a`.`id_petugas`))) ;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_ibfk_1` FOREIGN KEY (`id_anggota`) REFERENCES `anggota` (`id_anggota`),
  ADD CONSTRAINT `peminjaman_ibfk_2` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`),
  ADD CONSTRAINT `peminjaman_ibfk_3` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id_petugas`);

--
-- Ketidakleluasaan untuk tabel `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD CONSTRAINT `pengembalian_ibfk_1` FOREIGN KEY (`id_anggota`) REFERENCES `anggota` (`id_anggota`),
  ADD CONSTRAINT `pengembalian_ibfk_2` FOREIGN KEY (`kode_peminjaman`) REFERENCES `peminjaman` (`kode_peminjaman`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
