<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index(){
		$data = $this->mijnmodel->getKontak();
		$this->load->view('daftar-buku',array('data' => $data));
	}

	public function insert(){
	}

	public function update(){
	}

	public function delete(){
	}

	public function panggil(){
		$data = $this->db->query("SELECT * FROM tbcontact");
		echo "Jumlah : ".$data->num_rows()."<hr />";
		foreach ($data->result() as $row){
			echo "No : ".$row->contactID. "";
			echo "Tanggal : ".$row->contactDate. "";
			echo "Nama : ".$row->contactName. "";
			echo "Email : ".$row->contactEmail. "";
			echo "Subject : ".$row->contactSubject. "";
			echo "Pesan : ".$row->contactMessage. "";
		}
	}
}
