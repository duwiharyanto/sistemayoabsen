<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Tabel Presensi</title>
    <script type="text/javascript" src="../assets/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="../assets/jquery-easing/jquery.easing.min.js"></script>
    <script type="text/javascript" src="../assets/js/sb-admin.min.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
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
                				<th>1</th>
                			</tr>
                		</tbody>
                	</thead>
            </table>
          </div>      	
		</div>
	</div>
</div>
</body>
	
</html>