<?php 

require"../config/config.php";


if (isset($_POST['update'])) {	
$user = mysqli_real_escape_string($connection,$_POST['user']);
$name = mysqli_real_escape_string($connection, $_POST['name']);


$sql = mysqli_query($connection, "UPDATE tb_pegawai SET name = '$name' WHERE user = '$user'");	

  if($sql){
	echo "<script>window.location='tabel_pegawai.php'</script>";
} else {
	echo "<script>window.alert('Data gagal diupdate')</script>";
	echo "<script>window.location='tabel_pegawai.php'</script>";
	}

}
	 ?>
