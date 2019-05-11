
<?php
include 'connection.php';
$id = $_GET['id_buku'];
$sql = "DELETE FROM buku WHERE id_buku='$id'";
$res = mysqli_query($con, $sql);
if ($res) {
?>
	<script>
		alert("Data Buku dengan ID <?= $id ?>  berhasil dihapus");
		document.location.href='tampil_buku.php';
	</script>
<?php
} else{
	?>
	<script type="text/javascript">
		alert("Data gagal dihapus");
		document.location.href="tampil_buku.php";
	</script>
	<?php
}
?>