

<!-- controller mobil.php ini digunakan untuk mengakses dan mnegunakan uri segmen --> 
<!-- uri membanttu dalam pengambilan data pada url, segmen 1 pada uri segmen adalah nama controller, segmen 2 adalah nama nama method atau fungsi ayang digunakan, segmen 3 berisi data -->

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mobil extends CI_Controller {

//fuction warna berfungsi untuk menampilkan isi uri segmen
// untuk mengakses uri segmen bisa menggunakan syntax $this->uri->segment('urutan segmen yang akan diakses')
	public function warna(){
		echo "Segment 1 adalah = " . $this->uri->segment('1') . "<br/>"; //mengakses uri segmen 1 (menampilkan contrroller yang diguanakan)
		echo "Segment 2 adalah = " . $this->uri->segment('2') . "<br/>"; //mengakses uri segmen 2 (menampilkan methode atau fuction)
		echo "Segment 3 adalah = " . $this->uri->segment('3') . "<br/>"; //mengakses uri segmen 3 (menampilkan data pasa segmen 3)
		echo "Segment 4 adalah = " . $this->uri->segment('4') . "<br/>"; //mengakses uri segmen 4 (menampilkan data yang ada pada segment 4)	
		echo "Segment 5 adalah = " . $this->uri->segment('5') . "<br/>"; //mengakses uri segmen 5 (menampilkan data yang ada pada segment 5)
	}
}