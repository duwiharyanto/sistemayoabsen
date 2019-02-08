<?php 

require"../config/config.php";


if (isset($_POST['update'])) {	
$id = mysqli_real_escape_string($connection,$_POST['id']);
$user = mysqli_real_escape_string($connection,$_POST['user']);
$namaSlack = mysqli_real_escape_string($connection, $_POST['namaSlack']);

//if (isset('update')) {

//$user = mysqli_real_escape_string($connection, $_POST['user']);
//$namaSlack = mysqli_real_escape_string($connection, $_POST['namaSlack']);

$sql = mysqli_query($connection, "UPDATE tb_pegawai SET id = '$id', namaSlack = '$namaSlack' WHERE user = '$user'");	
//}

  if($sql){
	echo "<script>window.location='tabel_pegawai.php'</script>";
} else {
	echo "<script>window.alert('Data gagal diupdate')</script>";
	echo "<script>window.location='tabel_pegawai.php'</script>";
	}

}
	 ?>
