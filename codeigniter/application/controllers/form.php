
<?php 

class Form extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->library('form_validation'); //memanggil form validation
	}

// function index berfungsi untuk mengakses atau menampilkan v_form
	function index(){
		$this->load->view('v_form'); //mengakses atau menampilkan view v_form
	}

//function aksi untuk mengatur proses validasi 
	function aksi(){

		// fungsi set rul digunakan untuk membuat peraturan, terdapat 3 parameter; parameter pertama diisi nama form, kedua berisi nama yang akan dimunculkan, ketiga berisi peraturan yang akan digunakak
		$this->form_validation->set_rules('nama','Nama','required');  //menetapkan peraturan nama harus diisi (required)
		$this->form_validation->set_rules('email','Email','required'); //menetapkan peraturan email harus diisi (required)
		$this->form_validation->set_rules('konfir_email','Konfirmasi Email','required'); //menetapkan peraturan konfir email harus diisi (required)

		//proses validation
		if($this->form_validation->run() != false){
			echo "Form validation oke"; 
		}else{
			$this->load->view('v_form');
		}
	}
}