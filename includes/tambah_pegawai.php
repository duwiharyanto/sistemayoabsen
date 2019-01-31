<?php 

require "../config/config.php";


if (isset($_POST['submit'])) {
    $idSlack = mysqli_real_escape_string($connection, $_POST['idSlack']);
    $namaSlack = mysqli_real_escape_string($connection, $_POST['namaSlack']);

    $sql = mysqli_query($connection, "INSERT INTO tb_pegawai (id, idSlack, namaSlack) VALUES ('', '$idSlack', '$namaSlack')");  
}

if ($sql){
	header("location:tabel_pegawai.php");
	} else {
	echo "<script>alert('Data gagal dimasukkan')</script>";
	}


 ?>
