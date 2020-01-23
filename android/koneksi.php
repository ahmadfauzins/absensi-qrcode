<?php
 /*
 penulis: Muhammad yusuf
 website: http://www.kodingindonesia.com/

 Nama Database yang telah dibuat bernama "db_android" 
 Jika database yang kalian buat tidak sama dengan yang dibuat oleh penulis maka ganti nama database 
 sesuai dengan nama database yang kalian buat
 */
 
 //Mendefinisikan Konstanta
 define('HOST','localhost');
 define('USER','root');
 define('PASS','');
 define('DB','qrcodescan');
 
 //membuat koneksi dengan database
 $con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');
 
function koneksi_db(){ 
		$host = "localhost"; 
		$database = "qrcodescan"; 
		$user = "root"; 
		$password = ""; 
		
		$link = mysqli_connect($host,$user,$password);

		mysqli_select_db($link,$database);
		 
		if(!$link) 
			echo "Error:".mysqli_error(); 
		return $link; 
	} 


 ?>