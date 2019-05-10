<?php

class cAdmin extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('mAdmin');
	    }

	public function index(){
		$data['comment'] = $this->mAdmin->getAllData();
		if($this->input->post("cari")){
			$data['comment'] = $this->mAdmin->cariData();
		}
        	$this->load->view('admin/index.php',$data);
	}
}
