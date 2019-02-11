<?php 

require "../config/config.php";


if (isset($_POST['save'])) {
    $user = mysqli_real_escape_string($connection, $_POST['user']);
    $name = mysqli_real_escape_string($connection, $_POST['name']);

    $sql = mysqli_query($connection, "INSERT INTO tb_pegawai (id, user, name) VALUES ('', '$user', '$name')");  

if ($sql){
	echo "<script>window.location='tabel_pegawai.php'</script>";
	}
else {
	echo "<script>window.alert('Data gagal ditambahkan / Data duplikat')</script>";
	echo "<script>window.location='tabel_pegawai.php'</script>";
	}	

}

?>
