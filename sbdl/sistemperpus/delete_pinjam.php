
<?php
include 'connection.php';
$kd = $_GET['kode_peminjaman'];
$sql = "DELETE FROM peminjamam WHERE kode_peminjaman='$kd'";
$res = mysqli_query($con, $sql);
if ($res) {
?>
	<script>
		alert("Data Peminjaman Buku dengan Kode <?= $kd ?>  berhasil dihapus");
		document.location.href='tampil_pinjam.php';
	</script>
<?php
} else{
	?>
	<script type="text/javascript">
		alert("Data gagal dihapus");
		document.location.href="tampil_pinjam.php";
	</script>
	<?php
}
?>