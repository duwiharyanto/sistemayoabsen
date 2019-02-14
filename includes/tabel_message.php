<?php 

require "../config/config.php";
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Tabel Message</title>
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
              <a>Tabel Message</a>
            </li>
          </ol>

                <table class="table table-responsive w-100 d-block d-md-table table-bordered table-striped text-center" id="myTable"  cellspacing="0">
                	<thead>
                		<tr>
                            <th>ID</th>
                			<th>ID Slack</th>
                			<th>Timestamp</th>
                			<th>Message</th>
                		</tr>
                		<tbody>
                            <?php
                            $no = 1; 
                            $sql = mysqli_query($connection, "SELECT * FROM tb_message");
                            while ($data = mysqli_fetch_array($sql)) {   
                            //    var_dump($data);
                             ?>

                		      <tr>
                              <td><?php echo $no++; ?></td>
                				<td><?php echo $data['user']; ?></td>
                				<td><?php echo $data['timestamp']; ?></td>
                				<td><?php echo $data['message']; ?></td>
                			</tr>
                            <?php 
                            }
                             ?>
                		</tbody>
                	</thead>
            </table>     	
	   </div>
    </div>
</div>

<script type="text/javascript" src="../assets/jquery/jquery.min.js"></script>
<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../assets/jquery-easing/jquery.easing.min.js"></script>
<script type="text/javascript" src="../assets/js/sb-admin.min.js"></script>
<script type="text/javascript" src="../assets/datatables/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../assets/datatables/dataTables.bootstrap4.min.js"></script>

<script type="text/javascript">
    $(document).ready( function () {
    $('#myTable').DataTable();
});

</script>
</body>
	
</html>