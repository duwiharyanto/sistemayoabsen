<?php 

require_once "../config/config.php";

unset($_SESSION['username']);
session_destroy();
echo "<script>window.location='../index.php'</script>";

 ?>