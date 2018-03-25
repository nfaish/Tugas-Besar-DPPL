<?php 
$koneksi = mysqli_connect('localhost','root','','db_tubes');
if(!$koneksi){
	echo 'Gagal Terhubung ke Database';
}
?> 