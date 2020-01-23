<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
//Mendapatkan Nilai ID
 $nama = $_POST['nama'];
 
 //Import File Koneksi Database

 require_once('koneksi.php');
 //Membuat SQL Query
 $sql = "UPDATE tb_absen SET waktu_pulang=CURRENT_TIMESTAMP() WHERE nama='$nama';";
 
 
 //Menghapus Nilai pada Database 
 if(mysqli_query($con,$sql)){
 echo 'Berhasil ';
 }else{
 echo 'Gagal ';
 }
 
 mysqli_close($con);


// if($_SERVER['REQUEST_METHOD']=='POST'){
// 		$nama = $_POST['nama'];
		// $nama_item = $_POST['nama_item'];
		// $desc_item = $_POST['desc_item'];
		
		// require_once('koneksi.php');
		
		// $sql = "UPDATE tb_absen SET waktu_pulang=CURRENT_TIMESTAMP() WHERE nama=$nama;";
		
		// $sqljoin = "UPDATE mhs, dummy SET mhs.tgllhr = dummy.tgllhr WHERE mhs.nim = dummy.nim;";

	// 	if(mysqli_query($con,$sql)){
	// 		echo 'ABSEN PULANG BERHASIL';
	// 	}else{
	// 		echo 'ABSEN GAGAL';
	// 	}
		
	// 	mysqli_close($con);
	// }
}

?>