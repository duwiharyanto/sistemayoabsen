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
    <script type="text/javascript" src="../assets/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../assets/jquery-easing/jquery.easing.min.js"></script>
    <script type="text/javascript" src="../assets/js/sb-admin.min.js"></script>
    <script type="text/javascript" src="../assets/datatables/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="../assets/datatables/dataTables.bootstrap4.min.js"></script>

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

          <div class="container-fluid ">
            <div class="row">
                <div class="row offset-md-10">
                <button data-toggle="modal" data-target="#addnew" class="btn btn-primary btn-md">Add New Data</button>
                </div>
            </div>
        </div>

          <div class="table-responsive">
                <table class="table table-bordered text-center" id="myTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>ID Slack</th>
                            <th>Nama Slack</th>
                            <th>Opsi</th>
                        </tr>
                        <tbody>
                            <?php
                            $no = 1; 
                            $sql = mysqli_query($connection, "SELECT * FROM tb_pegawai");
                            while ($data = mysqli_fetch_array($sql)) {
                            //var_dump($data);
                             ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $data['user']; ?></td>
                                <td><?php echo $data['namaSlack']; ?></td>
                                <td>
                               <button type='button' class='btn btn-default btn-small' data-toggle='modal' data-target="#myModal<?php echo $data['idSlack']; ?>">Edit</button>
                                
                                <a type="button" class='btn btn-danger' data-toggle='modal' data-target='#delete' data-href='delete_pegawai.php?idSlack=".$data['idSlack']."'>Delete</a>
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

<!-- Tambah Data Pegawai -->
 <div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Form Pegawai</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                <div class="modal-body">
                    <form action="tambah_pegawai.php" method="POST">
                        <div class="form-group">
                            <label for="user">ID Slack:</label><br>
                            <input type="text" class="form-control" name="user" placeholder="User" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="namaSlack">Nama Slack:</label><br>
                            <input type="text" class="form-control" name="namaSlack" placeholder="Slack name">
                        </div>
                    <div class="modal-footer">
                        <button type="button" name="close" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
     </div>
</div>

<!-- Modal Edit Pegawai -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Edit Pegawai</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                <div class="modal-body">
                    <form action="update_pegawai.php" method="POST">

                        <input type="hidden" class="form-control" name="idSlack" value="<?php echo $data['idSlack'];?>">

                        <div class="form-group">
                            <label for="id">ID:</label><br>
                            <input type="text" class="form-control" name="id" value="<?php echo $data['id'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="namaSlack">Nama Slack:</label><br>
                            <input type="text" class="form-control" name="namaSlack" value="<?php echo $data['namaSlack']; ?>">
                        </div>
                    <div class="modal-footer">
                        <button type="button" name="close" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" name="edit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
     </div>
</div>

<!-- Modal Delete Pegawai -->



<?php 
include 'tambah_pegawai_modal.php';
 ?>

<script type="text/javascript">
    $(document).ready( function () {
    $('#myTable').DataTable();
} );


$(window).load(function(){
    $('#addnew').modal('show');
});

$(function(){
    $('#myModal').modal('show');


})

</script>
</body>
    
</html>