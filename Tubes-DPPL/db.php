<?php 
	$conn = mysqli_connect('localhost','root','','multiuser_db');
	if(!$conn){
		echo 'Gagal Terhubung ke Database';
	}
?> 