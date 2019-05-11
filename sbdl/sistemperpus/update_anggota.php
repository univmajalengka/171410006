
<?php
include 'connection.php';
$id = $_GET['id_anggota'];
$sql = "UPDATE FROM anggota WHERE id_anggota='$id'";
$res = mysqli_query($con, $sql);
if ($res) {
?>
	<script>
		alert("Data Anggota dengan ID <?= $id ?>  berhasil diupdate");
		document.location.href='tampil_data.php';
	</script>
<?php
} else{
	?>
	<script type="text/javascript">
		alert("Data gagal diupdate");
		document.location.href="tampil_data.php";
	</script>
	<?php
}
?>