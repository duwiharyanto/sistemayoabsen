<?php 

require "../config/config.php";

$user = $_GET['user'];

$sql = mysqli_query($connection, "DELETE FROM tb_pegawai WHERE user = '$user'");

if ($sql) {
	echo "<script>window.alert('Data berhasil dihapus')</script>";
	echo "<script>window.location='tabel_pegawai.php'</script>";
}

 ?>