<?php 

$host ="localhost";
$user ="root";
$pass = "poland";
$database = "ayoabsen";

$connection = mysqli_connect($host, $user, $pass, $database);

if (!$connection) {
	die("Koneksi gagal" .$mysqli_connect_error());
}


 ?>