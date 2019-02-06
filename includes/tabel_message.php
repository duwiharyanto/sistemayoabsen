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

		  <div class="table-responsive">
                <table class="table table-bordered text-center" id="myTable" width="100%" cellspacing="0">
                	<thead>
                		<tr>
                            <th>ID</th>
                			<th>ID Slack</th>
                			<th>Timestamp</th>
                			<th>Message</th>
                			<th>Opsi</th>
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
                				<td><?php echo $data['idSlack']; ?></td>
                				<td><?php echo $data['timestamp']; ?></td>
                				<td><?php echo $data['message']; ?></td>
                				<td> 
                                    <a class="btn btn-info" href="#">Edit</a>
                                    <a class="btn btn-danger" href="#" data-href="delete_message.php?id=<?php echo $data['id']; ?>" data-toggle="modal" data-target="#delete">Delete</a>         
                                </td>
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
</div>

<!-- Delete Message Modal -->

<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Delete Confirmation</h2>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
            </div>
            <div class="modal-body">
                Do you want to delete this data?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a class="btn btn-danger btn-ok">Delete</a>
            </div>
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

$('#delete').on('show.bs.modal', function(e) {
    $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
});

</script>
</body>
	
</html>