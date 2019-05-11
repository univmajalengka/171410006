
<?php
include 'connection.php';
$id = $_GET['id_anggota'];
$sql = "DELETE FROM anggota WHERE id_anggota='$id'";
$res = mysqli_query($con, $sql);
if ($res) {
?>
	<script>
		alert("Data Anggota dengan ID <?= $id ?>  berhasil dihapus");
		document.location.href='tampil_data.php';
	</script>
<?php
} else{
	?>
	<script type="text/javascript">
		alert("Data gagal dihapus");
		document.location.href="tampil_data.php";
	</script>
	<?php
}
?>