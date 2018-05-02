<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kontak extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index(){
		$data['kontak'] = $this->db->get('tbcontact');
		$this->load->view('gb/index', $data);
	}

	public function linktambah(){
		$this->load->view('gb/add');
	}

	public function tambah(){
		$contactID = $_POST['contactID'];
		$contactDate = $_POST['contactDate.'];
		$contactName = $_POST['contactName'];
		$contactEmail = $_POST['contactEmail'];
		$contactSubject = $_POST['contactSubject'];
		$contactMessage = $_POST['contactMessage'];
		$data_insert = array(
			'contactDate' => $contactDate,
			'contactName' => $contactName,
			'contactEmail' => $contactEmail,
			'contactSubject' => $contactSubject,
			'contactMessage' => $contactMessage
		);

		$res = $this->db->insert('kontak',$data_insert);
		if($res>=1){
			redirect('gb','refresh');
		} else {
			echo '<center><strong>Mohon maaf, data yang anda masukkan telah digunakan</strong></center><br>'; 
		}
	}

	public function linkubah($contactID) {
		$where = array('contactID' => $contactID);
		$data['buku'] = $this->mijnmodel->UpdateData($where,'kontak')->result();
		$this->load->view('gb/edit',$data);
	}

	public function ubah(){
		$contactID = $this->input->post('contactID');
		$contactDate = $this->input->post('$contactDate');
		$contactName = $this->input->post('$contactName');
		$contactEmail = $this->input->post('$contactEmail');
		$contactSubject = $this->input->post('$contactSubject');
		$contactMessage = $this->input->post('$contactMessage');
		$data = array(
			'contactDate' => $contactDate,
			'contactName' => $contactName,
			'contactEmail' => $contactEmail,
			'contactSubject' => $contactSubject,
			'contactMessage' => $contactMessage
		);
		$where = array(
			'contactID' => $contactID
		);

		$this->mijnmodel->update_data($where,$data,'kontak');
		redirect('gb');
	}

	public function hapus( $contactID = NULL)
	{
		$this->db->where('contactID', $contactID);
		$this->db->delete('kontak');
		redirect('gb');
	}
}