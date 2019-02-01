<?php 

date_default_timezone_set('Asia/Jakarta');

  if(!isset($_SESSION)) 
    { 
        session_start(); 

}

$host ="localhost";
$user ="root";
$pass = "poland";
$database = "ayoabsen";

$connection = mysqli_connect($host, $user, $pass, $database);

if (!$connection) {
	die("Koneksi gagal" . $mysqli_connect_errno());
}


 ?>