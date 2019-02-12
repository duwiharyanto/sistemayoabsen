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
                    </thead>
                		<tbody>
                            <?php
                            $sql = 'SELECT * FROM tb_presensi';
                            $result = mysqli_query($connection, $sql) or die(mysqli_connect_error());
                            if(mysqli_num_rows($result) > 0){
                              while($data = mysqli_fetch_assoc($result)){
                                ?>
                                <tr>
                                <td><?php echo $data['tanggal']; ?></td>
                                <td><?php echo $data['user']; ?></td>
                                <td><?php echo $data['waktu_IN']; ?></td>
                                <td><?php echo $data['waktu_OUT']; ?></td>
                                <td><?php echo $data['totalJam']; ?></td>
                                <td><button type="button" class="btn btn-info" href="#" data-toggle="modal" data-target="#edit">Edit</button>
                                <button type="button" class='btn btn-danger' href='#' data-toggle="modal" 
                                data-href="delete_presensi.php?id=<?php echo $data['id']; ?>"
                                data-target="#delete">Delete</button></td>
                                </tr>
                            <?php  
                        }
                      } else {
                        echo "0 results";
                    }
                        ?>
                </tbody>
            </table>
          </div>      	
		</div>
	</div>
</div>

<!-- Delete Presensi Modal -->

<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Delete Confirmation</h2>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
            </div>
            <div class="modal-body">
               <p class="text-center"> Do you want to delete this data? </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a class="btn btn-danger delete_button">Delete</a>
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
});

$('#delete').on('show.bs.modal', function(e) {
    $(this).find('.delete_button').attr('href', $(e.relatedTarget).data('href'));
});    
</script>
</body>
</html>