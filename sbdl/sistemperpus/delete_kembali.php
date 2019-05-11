
<?php
include 'connection.php';
$id = $_GET['id_petugas'];
$sql = "DELETE FROM pengembalian WHERE id_anggota='$id'";
$res = mysqli_query($con, $sql);
if ($res) {
?>
	<script>
		alert("Data Pengembalian Buku dengan ID <?= $id ?>  berhasil dihapus");
		document.location.href='tampil_kembali.php';
	</script>
<?php
} else{
	?>
	<script type="text/javascript">
		alert("Data gagal dihapus");
		document.location.href="tampil_kembali.php";
	</script>
	<?php
}
?>