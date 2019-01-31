<?php

require "../config/config.php";

$data = json_decode(file_get_contents('php://input'), true);
//print_r($data['user']['timestamp']);
foreach ($data as $value) {
	$sql = mysqli_query($connection, "INSERT INTO tb_message (id, idSlack, time_stamp, message) values ('"."','".$value['slack_id']."','".$value['timestamp']."','".$value['message']."')");
	}

?>
