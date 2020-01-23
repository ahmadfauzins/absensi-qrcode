<?php

 /*
 
 penulis: Muhammad yusuf
 website: http://www.kodingindonesia.com/
 
 */

	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		//Mendapatkan Nilai Variable
		$nomor = $_POST['nomor'];
		$nama = $_POST['nama'];
		$jenis = $_POST['jenis'];
		
		//Pembuatan Syntax SQL
		$sql = "INSERT INTO tb_data (nomor,nama,jenis) VALUES ('$nomor','$nama','$jenis')";
		
		//Import File Koneksi database
		require_once('koneksi.php');
		
		//Eksekusi Query database
		if(mysqli_query($con,$sql)){
			echo 'Berhasil Menambahkan Data';
		}else{
			echo 'Gagal Menambahkan Data';
		}
		
		mysqli_close($con);
	}
?>