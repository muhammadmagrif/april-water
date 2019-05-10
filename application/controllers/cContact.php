<?php

class cContact extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('mContact');
	    }

	public function index(){
        	$this->load->view('contact/index.php');
	}

	public function tambah(){
		$this->mContact->tambahData();
		$this->session->set_flashdata('flash','Pesan Anda sudah disampaikan ke Perusahaan April Water');
       	redirect('cContact');
	}


}
