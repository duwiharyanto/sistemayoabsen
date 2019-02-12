<?php 

require "../config/config.php";

$id = $_GET['id'];

$sql = mysqli_query($connection, "DELETE FROM tb_presensi WHERE id = '$id'");

if ($sql) {
	echo "<script>window.alert('Data berhasil dihapus')</script>";
	echo "<script>window.location='tabel_presensi.php'</script>";
}

 ?>