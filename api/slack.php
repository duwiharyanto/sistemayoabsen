<?php

require "../config/config.php";

$data = json_decode(file_get_contents('php://input'), true);
//print_r($data['user']['timestamp']);
// Tabel Message
foreach ((array)$data as $value) {
	$sql = mysqli_query($connection, "INSERT INTO tb_message (id, user, timestamp, message) values ('"."','".$value['slack_id']."','".$value['timestamp']."','".$value['message']."')");
	}


//Tabel Presensi
$sql = mysqli_query($connection, "SELECT * FROM tb_presensi");
//print_r(mysqli_num_rows($sql));
//mysqli_affected_rows($connection)

if (mysqli_num_rows($sql) > 0) {
	echo " Halo";
} else {
   echo "0 results";   
   {
   $query = mysqli_query($connection, "INSERT INTO tb_presensi (id, tanggal, idSlack, waktu_IN, waktu_OUT, totalJam) VALUES('" ."', '".$value['timestamp']."', '".$value['slack_id']."', '".$value['timestamp']."', '".$value['timestamp']."', '" ."') ON DUPLICATE KEY idSlack = VALUES('slack_id'), waktu_IN = ('timestamp')");
	}
 }


?>
