<html>
	<head>
		<title>Program Estimasi Indeks Prestasi Mahasiswa</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" href="css/boot.css">
		<script src="js/boot1.js"></script>
		<script src="js/boot2.js"></script>
		<script src="js/boot3.js"></script>
		<title>Halaman Login</title>
		<link rel="stylesheet" type="text/css" href="css/styles.css">
	</head>
	<body>
		<nav class="navbar sticky-top navbar-light" style="background-color: #406199;">
			<a class="navbar-brand" href="#">
		    	<img src="foto/telu.png" width="50" height="40">
		    	Program Estimasi Indeks Prestasi Mahasiswa
		  	</a>

		  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    	<span class="navbar-toggler-icon"></span>
		  	</button>

		    <div class="collapse navbar-collapse" id="navbarSupportedContent">
			    <ul class="navbar-nav mr-auto">
			    	<li class="nav-item">
			    		<a class="nav-link" href="index.php">Home</a>
			    	</li>
			    	<li class="nav-item">
			    		<a class="nav-link" href="about-us.php">About us</a>
			    	</li>
			    	<li class="nav-item">
			    		<a class="nav-link" href="hubungikami.html">Contact us</a>
			    	</li>
			    </ul>
		  	</div>
		</nav>
		<div class="box-login">
			<center>
				<img src="foto/kunci.png" /><br>
				<h2>Silahkan Login</h2>
			</center>

			<form action="proses-daftar.php" method="POST" align="center">
				<input type="Email" name="email" placeholder="Email" /><br>
				<input type="Password" name="pass" placeholder="Password" /><br>
				<input type="submit" name="login" value="Login" />
				<input type="submit" name="daftar" value="Daftar" />
			</form>
		</div>
	</body>
</html> 