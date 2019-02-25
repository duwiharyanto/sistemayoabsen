<?php 

require '../config/config.php';

date_default_timezone_set('Asia/Jakarta');
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
                <table class="table table-responsive w-100 d-block d-md-table table-bordered table-striped text-center" id="myTable" cellspacing="0">
                     <div class="float-md-left">
                        <a class="btn btn-primary" href="excel_table.php">Print</a>
                     </div>
                	<thead>
                		<tr>
                			<th>Tanggal</th>
                			<th>ID Slack</th>
                            <th>Nama Slack</th>
                			<th>Waktu IN</th>
                			<th>Waktu OUT</th>
                			<th>Total Jam</th>
                			<th>Opsi</th>
                		</tr>
                    </thead>
                		<tbody>
                            <?php
                            
                            //$sql = "SELECT * FROM tb_presensi";
                           $sql = "SELECT a.id, a.tanggal, a.user, b.name, a.waktu_IN, a.waktu_OUT, a.totalJam FROM tb_presensi a INNER JOIN tb_pegawai b ON a.user = b.user";
                            $result = mysqli_query($connection, $sql) or die(mysqli_connect_error());
                            if(mysqli_num_rows($result) > 0){
                              while($data = mysqli_fetch_assoc($result)){
                                ?>
                                <tr>
                                <td><?php echo $data['tanggal']; ?></td>
                                <td><?php echo $data['user']; ?></td>
                                <td><?php echo $data['name']; ?></td>
                                <td><?php echo $data['waktu_IN']; ?></td>
                                <td><?php echo $data['waktu_OUT']; ?></td>
                                <td><?php echo $data['totalJam']; ?></td>
                                <td>
                                <button type="button" class="btn btn-info edit_button" 
                                    data-toggle="modal" data-target="#edit"
                                    data-user = "<?php echo $data['user']; ?>"
                                    data-name = "<?php  echo $data['name']; ?>"
                                    data-tanggal = "<?php echo $data['tanggal']; ?>"
                                    data-in = "<?php echo $data['waktu_IN'] ?>"
                                    data-out = "<?php echo $data['waktu_OUT'] ?>"
                                    data-total = "<?php echo $data['totalJam'] ?>"> Edit </button>

                                <button type="button" class='btn btn-danger' 
                                href='#' data-toggle="modal" 
                                data-href="delete_presensi.php?id=<?php echo $data['id']; ?>"
                                data-target="#delete">Delete</button>
                            </td>
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

<!-- Modal Edit Presensi -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
         <div class="modal-content">
                 <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Edit Presensi</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                 </div>
            <div class="modal-body">
                <div class="fetched-data">
         <form role="form" action="update_presensi.php" method="POST">
            <div class="form-group">
                    <label for="tanggal">Tanggal:</label><br>
                        <input type="text" class="form-control tanggal" name="tanggal" id="tanggal" value="<?php echo $data['tanggal']; ?>" readonly>
                        </div>
            <div class="form-group">
                     <label for="user">ID Slack:</label><br>
                        <input type="text" class="form-control user" name="user" id="user" value="<?php echo $data['user'] ?>" readonly>
            </div>
             <div class="form-group">
                     <label for="name">Nama Slack:</label><br>
                        <input type="text" class="form-control name" name="name" id="name" value="<?php echo $data['name'] ?>" readonly>
            </div>
            <div class="form-group">
                    <label for="waktu_IN">Waktu IN:</label><br>
                        <input type="text" class="form-control waktu_IN" name="waktu_IN" id="waktu_IN" value="<?php echo $data['waktu_IN']; ?>">
            </div>
            <div class="form-group">
                    <label for="waktu_OUT">Waktu OUT:</label><br>
                        <input type="text" class="form-control waktu_OUT" name="waktu_OUT" id="waktu_OUT" value="<?php echo $data['waktu_OUT']; ?>">
            </div>
            <div class="form-group">
                    <label for="totalJam">Total Jam:</label><br>
                        <input type="text" class="form-control totalJam" name="totalJam" id="totalJam" value="<?php echo $data['totalJam']?>" readonly>
            </div>
            <div class="modal-footer">
                     <button type="button" name="close" class="btn btn-default" data-dismiss="modal">Close</button>
                     <button type="submit" name="update" class="btn btn-info">Update</button>
                    </div>
                </form>
            </div>
         </div>   
        </div>
     </div>
</div> 
-->

<!-- Modal Delete Presensi -->

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

$(document).on("click", '.edit_button', function(e) {  
    var tanggal = $(this).data('tanggal'); 
    var user = $(this).data('user');
    var name = $(this).data('name'); 
    var waktu_IN = $(this).data('in');
    var waktu_OUT = $(this).data('out');
    var totalJam = $(this).data('total');
    $(".tanggal").val(tanggal); 
    $(".user").val(user);
    $(".name").val(name);
    $(".waktu_IN").val(waktu_IN);
    $(".waktu_OUT").val(waktu_OUT);
    $(".totalJam").val(totalJam);
});     

$('#delete').on('show.bs.modal', function(e) {
    $(this).find('.delete_button').attr('href', $(e.relatedTarget).data('href'));
});    
</script>
</body>
</html>