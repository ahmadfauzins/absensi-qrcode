<?php



	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		//Mendapatkan Nilai Variable
		$nomor = $_POST['nomor'];//nama
		$nama = $_POST['nama'];//asalsekolah
		$jenis = $_POST['jenis'];//alamat
		$no = $_POST['no'];
		$kelompok = $_POST['kelompok'];
		$reguler = $_POST['reguler'];

		
		//Pembuatan Syntax SQL
		$sql = "INSERT INTO tb_peserta (nama,asal_sekolah,alamat,no_hp,kelompok,reguler) 
			VALUES ('$nomor','$nama','$jenis','$no','$kelompok','$reguler')";
		
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