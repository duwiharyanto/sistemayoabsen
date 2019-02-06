<?php 

require '../config/config.php';

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Tabel Presensi</title>
	<link rel="stylesheet" type="text/css" href="../assets/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/datatables/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="../assets/css/sb-admin.css">
</head>

<body id="page-top">
 	<?php 
 	require 'navbar.php';
 	 ?>

<div id="wrapper">
	<?php 
	require 'sidebar.php';
	 ?> 	 

	<div id="content-wrapper">

	   <div class="container-fluid">
		 <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a>Tabel Presensi</a>
            </li>
          </ol>

		  <div class="table-responsive">
                <table class="table table-bordered text-center" id="myTable" width="100%" cellspacing="0">
                	<thead>
                		<tr>
                			<th>Tanggal</th>
                			<th>ID Slack</th>
                			<th>Waktu IN</th>
                			<th>Waktu OUT</th>
                			<th>Total Jam</th>
                			<th>Opsi</th>
                		</tr>
                		<tbody>
                            <?php
                            $sql = 'SELECT * FROM tb_presensi';
                            $result = mysqli_query($connection, $sql) or die(mysqli_connect_error());
                            if(mysqli_num_rows($result) > 0){
                              while($data = mysqli_fetch_assoc($result)){
                                print_r($data);
                                echo "<tr>
                                <td>".$data['tanggal']."</td>;
                                <td>".$data['idSlack']."</td>;
                                <td>".$data['waktu_IN']."</td>;
                                <td>".$data['waktu_OUT']."</td>;
                                <td>".$data['totalJam']."</td>;
                                <td><a class='btn btn-info' href='#'>Edit <br>
                                <a class='btn btn-danger' href='#'>Delete </td>;
                            </tr>";
                        }
                      }  
                         else {
                        echo "0 results";
                        }
                            
                     mysqli_close($connection);
                     ?>    

                		</tbody>
                	</thead>
            </table>
          </div>      	
		</div>
	</div>
</div>

<script type="text/javascript" src="../assets/jquery/jquery.min.js"></script>
<script type="text/javascript" src="../assets/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="../assets/jquery-easing/jquery.easing.min.js"></script>
<script type="text/javascript" src="../assets/js/sb-admin.min.js"></script>
<script type="text/javascript" src="../assets/datatables/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../assets/datatables/dataTables.bootstrap4.min.js"></script>

<script type="text/javascript">
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
</body>
	
</html>