<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//meng extend belajar controller belajar dengan CI_Controler
class Belajar extends CI_Controller {

//fungsi construct berguna untuk memanggil model
	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
	}

//methode index 
	public function index(){
		echo "ini method index pada controller belajar";
	}
//methode halo yang berfungsi untuk menampilkan view_belajar
	public function halo(){
		$data['nama_web'] = "Praktikum kedua"; //data yang akan di parsing di masukkan ke array
		$this->load->view('view_belajar',$data); //mengakses atau menampilkan view, parameter kedua disi dengan data yang akan diparsing $data
		
	}

 //fuction user
	
	function user(){
		$data['user'] = $this->m_data->ambil_data()->result(); //mengambil data dari database dengan menggunakan fungsi ambil data yang ada di m_data, kemudian dimasukkan kedalam variabel data dalam bentuk array
		$this->load->view('v_user.php',$data); //mengakses atau menampilkan view, parameter kedua disi dengan data user yang akan diparsing $data
		
	}

}

