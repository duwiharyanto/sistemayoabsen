<?php

require "../config/config.php";

$data = json_decode(file_get_contents('php://input'), true);
//print_r($data['user']['timestamp']);
// Tabel Message
foreach ((array)$data as $value) {
	$sql = mysqli_query($connection, "INSERT INTO tb_message (id, user, timestamp, message) VALUES ('"."','".$value['slack_id']."','".$value['timestamp']."','".$value['message']."')");
	}

// Tabel Presensi
$sql = mysqli_query($connection, "SELECT * FROM tb_presensi WHERE tanggal = CURDATE() AND user = '".$value['slack_id']."'");


if (mysqli_num_rows($sql) > 0 ) {
	echo " Halo";
	while ($data = mysqli_fetch_array($sql)) {
   $query = mysqli_query($connection, "UPDATE tb_presensi SET waktu_OUT = now(), totalJam = timediff(waktu_OUT, waktu_IN) WHERE id = '".$data['id']."' " );
	}
} else {
   echo "0 results";   
   {
   	$query = mysqli_query($connection, "INSERT INTO tb_presensi (id, tanggal, user, waktu_IN, waktu_OUT, totalJam) VALUES('" ."', '".$value['timestamp']."', '".$value['slack_id']."', '".$value['timestamp']."', '".$value['00:00:00']."', '".$value['00:00:00']."') ON DUPLICATE KEY UPDATE tanggal = '".$value['timestamp']."', user = '".$value['slack_id']."', waktu_IN = '".$value['timestamp']."';");
	}
 }




?>
