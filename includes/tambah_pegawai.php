<?php 

require "../config/config.php";


if (isset($_POST['submit'])) {
    $user = mysqli_real_escape_string($connection, $_POST['user']);
    $namaSlack = mysqli_real_escape_string($connection, $_POST['namaSlack']);

    $sql = mysqli_query($connection, "INSERT INTO tb_pegawai (id, user, namaSlack) VALUES ('', '$user', '$namaSlack')");  
}


if ($sql) {
	header("location:tabel_pegawai.php");
	} else {
	echo "<script>alert('Data gagal dimasukkan/Data Duplikat')</script>";
	echo "<script>window.location='tabel_pegawai.php'</script>";

}

 ?>
