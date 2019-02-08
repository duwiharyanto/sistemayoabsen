<?php 

require "../config/config.php";


if (isset($_POST['submit'])) {
    $user = mysqli_real_escape_string($connection, $_POST['user']);
    $namaSlack = mysqli_real_escape_string($connection, $_POST['namaSlack']);

    $sql = mysqli_query($connection, "INSERT INTO tb_pegawai (id, user, namaSlack) VALUES ('', '$user', '$namaSlack')");  
}
 ?>
