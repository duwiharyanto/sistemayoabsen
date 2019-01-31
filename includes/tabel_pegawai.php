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

            
        <button class="btn btn-primary btn-md" data-toggle="modal" data-target="#myModal">
        Create New Data
        </button>

        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Form Pegawai</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                <div class="modal-body">
                    <form class="" method="POST">
                        <div class="form-group">
                            <label for="idSlack">ID Slack:</label><br>
                            <input type="text" class="form-control" name="idSlack" placeholder="ID Slack" >
                            <br>
                            <label for="namaSlack">Nama Slack:</label><br>
                            <input type="text" class="form-control" name="namaSlack" placeholder="Slack name">
                        </div>
                    </form>
                </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

		  <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                	<thead>
                		<tr>
                            <th>ID</th>
                			<th>ID Slack</th>
                			<th>Nama Slack</th>
                			<th>Opsi</th>
                		</tr>
                		<tbody>
                			<tr>
                				<th>1</th>
                				<th>1</th>
                				<th>1</th>
                				<th>
                                    <a class="btn btn-info" href="#"><i class="fas fa-pencil"></i>Edit</a>
                                    <a class="btn btn-danger" href="#"><i class="fas fa-trash-o"></i>Delete</a>              
                                </th>
                			</tr>
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
</body>
	
</html>