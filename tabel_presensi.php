<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Tabel Presensi</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body>
 <nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <a class="navbar-brand" href="#">AyoAbsen</a>
  <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">	
  <ul class="navbar-nav ml-auto">
    <li class="nav-item active">
      <a class="nav-link" href="index.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="tabel_presensi.php">Tabel Presensi</a>
    </li>
  </ul>
</div>
</nav> 		
	<div class="container">
		<div class="row">
			<div class="row">
			<h2>Tabel Presensi</h2>
			<table class="table table-bordered table-striped text-center">
				<tr>
					<th>ID</th>
					<th>Tanggal</th>
					<th>ID Slack</th>
					<th>Nama Slack</th>
					<th>Waktu IN</th>
					<th>Waktu OUT</th>
					<th>Total Jam</th>
					<th>Opsi</th>
				</tr>
				<tr>
					<td>1</td>
					<td>2</td>
					<td>3</td>
					<td>4</td>
					<td>5</td>
					<td>6</td>
					<td>7</td>
					<td>
					<a href="edit.php?edit_id=" class="btn btn-info"><i class="fas fa-pencil"></i>Edit</a>
					<a href="delete.php?delete_id" class="btn btn-danger"><i class="fas fa-trash"></i>Delete</a>
					</td>
				</tr>
			</table>
		</div>
	</div>

	<script type="text/javascript" src="assets/js/bootstrap.js"></script>
</body>
	
</html>