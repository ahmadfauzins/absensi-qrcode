<?php 

	if($_SERVER['REQUEST_METHOD']=='POST'){
		//MEndapatkan Nilai Dari Variable 
		$nama = $_POST['nama'];
		$tinggi = $_POST['tinggi'];
		
		//import file koneksi database 
		require_once('koneksi.php');
		
		//Membuat SQL Query
		$sql = "UPDATE tb_data SET nama = '$nama', tinggi = '$tinggi' WHERE nama = $nama;";
		
		//Meng-update Database 
		if(mysqli_query($con,$sql)){
			echo 'Berhasil Update Data';
		}else{
			echo 'Gagal Update Data';
		}
		
		mysqli_close($con);
	}
?>