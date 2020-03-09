
<!-- library berfungsi untuk mempermudah mengguanakan syntax yang sama tanpa menulis secara berulang-ulang, hanya cukup memanggil fungsi yang akan di  gunakan pada library yang sudah kita buat-->

<?php 
// deklarasi kelas
class Malasngoding{

// /methode atau fungsi library yang nantinya dapat digunakan berulang kali

	function nama_saya(){
		echo "Nama saya adalah malasngoding !";
	}

	function nama_kamu($nama){
		echo "Nama kamu adalah ". $nama ." !";
	}
}