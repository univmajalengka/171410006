
<?php
include 'connection.php';
$id = $_GET['id_buku'];
$sql = "UPDATE FROM buku WHERE id_buku='$id'";
$res = mysqli_query($con, $sql);
if ($res) {
?>
	<script>
		alert("Data Buku dengan ID <?= $id ?>  berhasil diupdate");
		document.location.href='tampil_buku.php';
	</script>
<?php
} else{
	?>
	<script type="text/javascript">
		alert("Data gagal diupdate");
		document.location.href="tampil_buku.php";
	</script>
	<?php
}
?>