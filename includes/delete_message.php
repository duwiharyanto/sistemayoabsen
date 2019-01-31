<?php 

require "../config/config.php";

$idSlack = $_GET['idSlack'];

$sql = mysqli_query($connection, "DELETE FROM tb_message WHERE idSlack = '$idSlack'");


 ?>