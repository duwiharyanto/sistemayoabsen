<?php 

require"../config/config.php";

$idSlack = $_GET['idSlack'];

if (isset($_POST['save'])) {
	$id = mysqli_real_escape_string($connection, $_POST['id']);
	$namaSlack = mysqli_real_escape_string($connection, $_POST['namaSlack']);

	$sql = mysqli_query($connection, "UPDATE tb_pegawai SET id = '$id', namaSlack = '$namaSlack' WHERE idSlack = '$idSlack'");
	header("location: tabel_pegawai.php");
}

 ?>