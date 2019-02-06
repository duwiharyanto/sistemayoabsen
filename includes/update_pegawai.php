<?php 

require"../config/config.php";


$id = $_GET['id'];

if (isset('update')) {

$user = mysqli_real_escape_string($connection, $_POST['user']);
$namaSlack = mysqli_real_escape_string($connection, $_POST['namaSlack']);

$sql = mysqli_query($connection, "UPDATE tb_pegawai SET user = '$user', namaSlack = '$namaSlack' WHERE id = '$id'");	
}

  if($sql){
	echo "<script>window.location='tabel_pegawai.php'</script>";
} else {
	echo "<script>window.alert('Data gagal diupdate')</script>";
	echo "<script>window.location='tabel_pegawai.php'</script>";
}


	 ?>
