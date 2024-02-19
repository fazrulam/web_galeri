<?php
// include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Halaman login</title>
	<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
</head>
<body>

	<nav class="navbar navbar-expand-lg bg-body-tertiary border-bottom">
  <div class="container">
    <a class="navbar-brand text-dark" href="index.php">Web Foto</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse mt-2" id="navbarNav">
      <ul class="navbar-nav me-auto">
       
      </ul>
      <a href="register.php" class="btn btn-outline-primary m-1">Daftar</a>
        <a href="login.php" class="btn btn-outline-success m-1">Login</a>
    </div>
  </div>
</nav>
	<div class="container py-5">
		<div class="row justify-content-center">
			<div class="col-md-4">
				<div class="card">
					<div class="card-header text-center">
						
						<h5>Login Aplikasi</h5>
					</div>
					<div class="card-body">
						<form action="proses_login.php" method="post">
							<label class="form-label">Username</label>
							<input type="text" name="username" class="form-control" required>
							<label class="form-label">Password</label>
							<input type="password" name="Password" class="form-control" required>
							<div class="d-grid mt-2">
							<button class="btn btn-primary" type="submit">Login</button>
							</div>
						</form>
						<hr>
		                <p>Belum punya akun? <a href="register.php"> Daftar disini!</a></p>
						
					</div>
				</div>
			</div>
		</div>
	
  <footer class="d-flex justify-content-center mt-5 border-top bg-light fixed-bottom">
  	<p>&copy; UKK RPL || FAZRUL AHMAD MUTTAKIN</p>
  </footer>
	

<script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
</body>
</html>
