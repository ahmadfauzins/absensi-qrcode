<?php

	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		//Mendapatkan Nilai Variable
		$nama = $_POST['nama'];
	// $nama = $_GET['nama'];
	//Importing database
		require_once('koneksi.php');

		// $mentor = $_POST['mentor'];
		$q = mysqli_query( koneksi_db(),"SELECT * FROM tb_peserta WHERE nama = '$nama'");
        while($b = mysqli_fetch_array($q)){
        
        $mentor = $b['kelompok'];

		}

		$r = mysqli_query( koneksi_db(),"SELECT * FROM tb_mentor WHERE kelompok = '$mentor'");
        while($b = mysqli_fetch_array($r)){
        
        $namamentor = $b['nama'];

		}
				
		//Pembuatan Syntax SQL

		$sql = "INSERT INTO tb_absen (nama,mentor,nama_mentor,tanggal,waktu_masuk) VALUES
		('$nama','$mentor','$namamentor',CURRENT_TIMESTAMP(),CURRENT_TIMESTAMP())";
		
		//Import File Koneksi database
		// require_once('koneksi.php');
		
		//Eksekusi Query database
		if(mysqli_query($con,$sql)){
			echo 'ABSEN BERHASIL';
		}else{
			echo 'ABSEN GAGAL';
		}
		
		mysqli_close($con);
	}
?>