<?php 

 //m_data di extends dengan ci_model
class M_data extends CI_Model{

//fungsi ambil_data digunakan untuk mengambil data dari database
	function ambil_data(){
		return $this->db->get('user'); // syntax untukmengambil data dari database, parameternya diisi dengan nama tabel yang ingin diambil datanya (user)
	}
}