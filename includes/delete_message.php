<?php 

require "../config/config.php";

$id = $_GET['id'];

$sql = mysqli_query($connection, "DELETE FROM tb_message WHERE id = '$id'");

if ($sql) {
	echo "<script>window.location='tabel_message.php'</script>";
}


 ?>