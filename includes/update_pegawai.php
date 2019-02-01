<?php 

require"../config/config.php";

?>


<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Pegawai</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
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
	require "navbar.php";
	 ?>

<div id="wrapper">
	<?php require "sidebar.php"; ?>


<div id="content-wrapper">	
	<div class="container-fluid">
         <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a>Edit Data Pegawai</a>
            </li>
          </ol>

	<?php 

	$idSlack = $_GET['idSlack'];

if (isset($_POST['edit'])) {
	$id = mysqli_real_escape_string($connection, $_POST['id']);
	$namaSlack = mysqli_real_escape_string($connection, $_POST['namaSlack']);

	$sql = mysqli_query($connection, "UPDATE tb_pegawai SET id = '$id', namaSlack = '$namaSlack' WHERE idSlack = '$idSlack'");
	header("location: tabel_pegawai.php");
}


	 ?>

<?php 
$idSlack = $_GET['idSlack'];
$sql = mysqli_query($connection, "SELECT * FROM tb_pegawai WHERE idSlack = '$idSlack'");
while($data = mysqli_fetch_assoc($sql)){
?>
<form action="" method="POST">

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
       <?php 
      }
        ?>
		</div>
	</div>
</div>

</body>
</html>