<?php 

require"../config/config.php";


if (isset($_POST['update'])) {	
$user = mysqli_real_escape_string($connection,$_POST['user']);
$waktu_IN = mysqli_real_escape_string($connection, $_POST['waktu_IN']);
$waktu_OUT = mysqli_real_escape_string($connection, $_POST['waktu_OUT']);
$totalJam = mysqli_real_escape_string($connection, $_POST['totalJam']);


$sql = mysqli_query($connection, "UPDATE tb_presensi SET waktu_IN = '$waktu_IN', waktu_OUT = '$waktu_OUT', totalJam = '$totalJam' WHERE user = '$user'");	

  if($sql){
	echo "<script>window.location='tabel_presensi.php'</script>";
} else {
	echo "<script>window.alert('Data gagal diupdate')</script>";
	echo "<script>window.location='tabel_presensi.php'</script>";
	}

}
	 ?>