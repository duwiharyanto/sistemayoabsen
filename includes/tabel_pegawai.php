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
                <div class="row">
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
                            var_dump($data);
                             ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $data['user']; ?></td>
                                <td><?php echo $data['namaSlack']; ?></td>
                                <td>
                                <a  type="button" href="#" data-target='#edit<?php echo $data['idSlack'];  ?>' class='btn btn-info btn-md' id='edit' data-toggle='modal'>Edit</a>
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

<?php 
include ("tambah_pegawai_modal.php");
 ?>

<script type="text/javascript">
    $(document).ready( function () {
    $('#myTable').DataTable();
} );


$(window).load(function(){
    $('#addnew').modal('show');
});

</script>
</body>
    
</html>