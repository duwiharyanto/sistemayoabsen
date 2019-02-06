<?php 

require "../config/config.php";

$id = $_GET['id'];

$sql = mysqli_query($connection, "DELETE FROM tb_message WHERE id = '$id'");

if ($sql) {
	echo "Data berhasil dihapus";
	header("location:tabel_message.php");
} else {
	"Data gagal dihapus" . "<br>" . mysqli_connect_errno();
}



 ?>