<?php 

require_once "config/config.php";
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>AyoAbsen Landing Page</title>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
 <nav class="navbar navbar-expand-md bg-dark navbar-dark">
 	<div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
 		<a class="navbar-brand mr-auto" href="#">AyoAbsen</a>
 	</div>
 	<div class="navbar-collapse collapse w-100 order-3 dual-collapse2">	
 		<ul class="navbar-nav ml-auto">
 			<li class="nav-item active">
 				<a class="nav-link" href="index.php">Home</a>
 			</li>
 		</ul>
 	</div>
</nav>
<div class="container">
	<br>
	<h2>Selamat Datang</h2>
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Sign In</h5>
            <?php 
            if (isset($_POST['signin'])) {
            	$username = trim(mysqli_real_escape_string($connection, $_POST['username']));
            	$password = sha1(mysqli_real_escape_string($connection, $_POST['password']));
            	$sql = mysqli_query($connection, "SELECT * FROM tb_user WHERE username = '$username' AND password = '$password'") or die(mysqli_error($connection));
            	if (mysqli_num_rows($sql) > 0) {
            		$_SESSION['username'] = $username;
            		echo "<script>window.location='includes/dashboard.php'</script>";
            	} else { ?>
            		<div class="row">
            			<div class="col-md-12">
            				<div class="alert alert-danger" role="alert" id="alert"> 
            					<button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true"></span>&times;</button>
            					<h4>Login gagal.</h4>
            					<h4>Username atau Password salah.</h4>
            				</div>
            			</div>
            		</div>
            		<?php 
            	}
            }

             ?>
            <form class="form-signin" action="" method="POST">
              <div class="form-label-group w-100">
                <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
                <label for="username">Username</label>
              </div>
              <div class="form-label-group w-100">
                <input type="password" name="password" class="form-control" placeholder="Password" required autofocus="">
                <label for="password">Password</label>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="signin">Sign in</button>
              <hr class="my-4">
            </form>
          </div>
        </div>
      </div>
    </div>
</div>		
<br>
<footer class="page-footer font-small black">
	<div class="footer-copyright text-center py-3"> Copyright 2019 @ PT. Arisoft Riset Informatika
		
	</div>
</footer>

<script type="text/javascript" src="assets/jquery/jquery.min.js"></script>
<script type="text/javascript" src="assets/jquery-easing/jquery.easing.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    setTimeout(function() {
        $(".alert").alert('close');
    }, 500);
});
</script>
</body>
	
</html>