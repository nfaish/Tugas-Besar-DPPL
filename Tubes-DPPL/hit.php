<!DOCTYPE html>
<html>
<head>
	<title>Program Estimasi Indeks Prestasi Mahasiswa</title>
  	<link rel="stylesheet" type="text/css" href="css/style-homepage.css">
  	<link rel="stylesheet" href="css/boot.css">
  	<script src="js/boot1.js"></script>
  	<script src="js/boot2.js"></script>
  	<script src="js/boot3.js"></script>
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
        <a class="nav-link" href="Form-DataDiri.php">Home</a>
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

<div class="box-form">
	<h3 align="center">Pengestimasian Indeks Prestasi</h3><hr>
	<form class="form-horizontal"><br>

		<div class="form-group">
		    
		  <div class="col-md-10">
		  	<?php
			echo	"<form id='alanpri' name='alan'	method='post' action='hitung.php'>";
			echo    "<h5>Masukkan Semester yang Sudah Anda Tempuh</h5>";
			echo	"<input name='matkul' type='text' id='matkul' size='20' /><br><br>";
			echo	"<input type='submit' id='button' value='Lihat'>";
			echo	"</form>";
			?>
		  </div>
		</div>

	</form>
</div>

</body>
</html>