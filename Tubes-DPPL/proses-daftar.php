<?php 
if(isset($_POST['daftar'])){
	include 'koneksi.php';
	if(!is_numeric($_POST['nim'])){
		header("location:Form-DataDiri.php?err1");
	}else{
		$daftar = mysqli_query($koneksi, "INSERT INTO daftar VALUES(
			NULL,
			'".$_POST['nama']."',
			'".$_POST['nim']."',
			'".$_POST['univ']."',
			'".$_POST['fak']."',
			'".$_POST['prodi']."',
			'".$_POST['email']."',
			'".$_POST['pass']."')");
		if($daftar){
			echo 'Selamat Anda Berhasil';
		}else{
			echo 'Mohon Maaf Anda Gagal'.mysqli_error($koneksi);
		}
	}
}
?> 