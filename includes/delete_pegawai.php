<?php 

require "../config/config.php";

$id = $_GET['id'];

$sql = mysqli_query($connection, "DELETE FROM tb_pegawai WHERE id = '$id'");

if ($sql) {
	echo "<script>window.location='tabel_pegawai.php'</script>";
}

 ?>