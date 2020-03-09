<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Download extends CI_Controller {
	
// fuction construct di controler download.php ini digunakan untuk mengaktifkan function helper download dan url 
//kenapa mengaktifkan helper download ? agar dapat menggunakan fasilitas download codeigniter
// kenapa mengaktifkan helper url? agar dapat menggunakan fasilitas url codeigniter
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url','download')); // mengaktifkan helper doenload dan url		
	}

//fuction index di controller download.php ini berfungsi untuk menampilkan view v_download yang merupakan form untuk melakukan download
	public function index(){		
		$this->load->view('v_download'); //membuka view v_download
	}


//function lakukan download ini berfungsi untuk melakukan download.
	public function lakukan_download(){				
		force_download('gambar/erd.jpg',NULL); //aksi download, force_download adalah fuction yang ada di coeigniter untuk melakukan download, untuk parameter pertama berisi nama file, parameter kedua disi dengan isinya. atau bisa jugalangsung mengisi lokasi file yang akan didownload, dan parameter kedua null.
	}	

}