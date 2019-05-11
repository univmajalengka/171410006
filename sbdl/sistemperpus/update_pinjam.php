
<?php
include 'connection.php';
$kd = $_GET['kode_peminjaman'];
$sql = "UPDATE FROM peminjamam WHERE kode_peminjaman='$kd'";
$res = mysqli_query($con, $sql);
if ($res) {
?>
	<script>
		alert("Data Peminjaman Buku dengan Kode <?= $kd ?>  berhasil diupdate");
		document.location.href='tampil_pinjam.php';
	</script>
<?php
} else{
	?>
	<script type="text/javascript">
		alert("Data gagal diupdate");
		document.location.href="tampil_pinjam.php";
	</script>
	<?php
}
?>