
<!-- controller bernama ngoding ini berguna untuk memanggil function atau method yang ada di 
libraries malasngoding.php -->

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ngoding extends CI_Controller {
	
//function index
	function index(){
		$this->load->library('malasngoding'); //memanggil atau mengaktifkan library malasngoding
		$this->malasngoding->nama_saya(); //memanggil atau methode nama_saya yang ada di library malasngoding
                echo "<br/>";
                $this->malasngoding->nama_kamu("Mila"); // //memanggil method nama_kamu yang ada di library malasngoding
	}

}