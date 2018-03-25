<!DOCTYPE html>
<html>
<head>
	<title>Program Estimasi Indeks Prestasi Mahasiswa</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
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

<div class="box-form">
	<h3 align="center">Data Diri</h3><hr>
	<?php 
		if(isset($_GET['err1'])){
			echo '<div class="alert-error">Mohon Maaf, NIM yang Anda Masukkan Harus Angka!!</div>';
		}
	?>
	<form class="form-horizontal" action="proses-daftar.php" method="post"><br>

		<div class="form-group">
		  <label class="col-md-10 control-label" for="textinput">Nama :</label>  
		  <div class="col-md-10">
		  <input id="textinput" name="nama" type="text" placeholder="Nama Lengkap" class="form-control input-md" required>
		  <span class="help-block">Contoh : Jonathan Rea</span>
		  </div>
		</div>

		<div class="form-group">
		  <label class="col-md-10 control-label" for="textinput">NIM :</label>  
		  <div class="col-md-10">
		  <input id="textinput" name="nim" type="text" placeholder="Nomor Induk Mahasiswa" class="form-control input-md" required>
		  <span class="help-block">Contoh : 1103169899</span>
		  </div>
		</div>

		<div class="form-group">
		  <label class="col-md-10 control-label" for="textinput">Nama Universitas :</label>  
		  <div class="col-md-10">
		  <input id="textinput" name="univ" type="text" placeholder="Universitas" class="form-control input-md" required>
		  <span class="help-block">Contoh : Universitas Harapan Jaya</span>
		  </div>
		</div>

		<div class="form-group">
		  <label class="col-md-10 control-label" for="textinput">Fakultas :</label>  
		  <div class="col-md-10">
		  <input id="textinput" name="fak" type="text" placeholder="Fakultas" class="form-control input-md" required>
		  <span class="help-block">Contoh : Fakultas Teknik Elektro</span>
		  </div>
		</div>

		<div class="form-group">
		  <label class="col-md-10 control-label" for="textinput">Program Studi :</label>  
		  <div class="col-md-10">
		  <input id="textinput" name="prodi" type="text" placeholder="Program Studi" class="form-control input-md" required>
		  <span class="help-block">Contoh : S1 Sistem Komputer</span>
		  </div>
		</div>

		<div class="form-group">
		  <label class="col-md-10 control-label" for="textinput">E-mail :</label>  
		  <div class="col-md-10">
		  <input id="textinput" name="email" type="email" placeholder="E-mail" class="form-control input-md" required>
		  <span class="help-block">Contoh : indra22@gmail.com</span>
		  </div>
		</div>

		<div class="form-group">
		  <label class="col-md-10 control-label" for="textinput">Password :</label>  
		  <div class="col-md-10">
		  <input id="textinput" name="pass" type="password" placeholder="Password" class="form-control input-md" required>
		  </div>
		</div>


		<div class="form-group">
		  <label class="col-md-4 control-label" for="singlebutton"></label>
		<div class="col-md-4">
		  	<input type="Submit" name="daftar" value="Submit">
		</div>
		</div>

	</form>
</div>

</body>
</html>