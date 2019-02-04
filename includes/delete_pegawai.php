<?php 

require "../config/config.php";

$idSlack = $_GET['idSlack'];

$sql = mysqli_query($connection, "DELETE FROM tb_pegawai WHERE idSlack = '$idSlack'");



 ?>