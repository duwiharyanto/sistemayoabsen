<?php 

require"../config/config.php";


	$user = $_GET['user'];
  $id = $_GET['id'];
  $namaSlack = $_GET['namaSlack'];

	//$id = mysqli_real_escape_string($connection, $_POST['id']);
	//$namaSlack = mysqli_real_escape_string($connection, $_POST['namaSlack']);

	$sql = mysqli_query($connection, "UPDATE tb_pegawai SET id = '$id', namaSlack = '$namaSlack' WHERE user = '$user'");

  if($sql){
    echo "Data berhasil diupdate";
	header("location: tabel_pegawai.php");
  } else {
    echo "Data gagal diupdate" . $sql . "<br>" . $mysqli_connect_error();
  }


	 ?>
