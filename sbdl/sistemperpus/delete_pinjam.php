
<?php
include 'connection.php';
$id = $_GET['id_anggota'];
$sql = "DELETE FROM view_peminjaman WHERE id_anggota='$id'";
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