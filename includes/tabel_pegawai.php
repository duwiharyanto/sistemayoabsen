<?php 

require_once "../config/config.php";
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
              <a>Tabel Pegawai</a>
            </li>
          </ol>
            <?php 

            require "tambah_pegawai_modal.php";
             ?>
		  <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                	<thead>
                		<tr>
                            <th>ID</th>
                			<th>ID Slack</th>
                			<th>Nama Slack</th>
                			<th>Opsi</th>
                		</tr>
                    </thead>
                		<tbody>
                            <?php
                            $no = 1;
                            $sql = mysqli_query($connection, "SELECT * FROM tb_pegawai");
                            while ($data = mysqli_fetch_array($sql)) {
                            //print_r($data);
                             ?>
                			<tr>
                                <td><?php echo $no++; ?></td>
                				<td><?php echo $data['idSlack']; ?></td>
                				<td><?php echo $data['namaSlack']; ?></td>
                				<td>
                                    <a href='#edit_<?php echo $data['idSlack']; ?>' data-toggle="modal" class="btn btn-info"><i class="fas fa-pencil"></i>Edit</a>
                                    <a href='delete_pegawai.php?idSlack=<?php echo $data['idSlack']; ?>' class="btn btn-danger"><i class="fas fa-trash-o"></i>Delete</a>              
                                </td>
                			</tr>
                            <?php 
                            }
                             ?>
                		</tbody>
            </table>
          </div>      	
		</div>
	</div>
</div>

<script type="text/javascript" src="../assets/jquery/jquery.min.js"></script>
<script type="text/javascript" src="../assets/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="../assets/jquery-easing/jquery.easing.min.js"></script>
<script type="text/javascript" src="../assets/js/sb-admin.min.js"></script>
</body>
	
</html>