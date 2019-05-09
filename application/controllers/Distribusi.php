<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Distribusi extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->helper();
    $this->load->helper('date');
    $this->load->library('form_validation');
    $this->load->model('Model_Pengiriman');
  }

	public function index()
	{
    $data = ['pengiriman' => $this->Model_Pengiriman->get_all()];
    $this->load->view('distribusi/template/header', $data);
		$this->load->view('distribusi/index_distribusi');
    $this->load->view('distribusi/template/footer');
	}

  public function add(){
    $data = ['action' => 'distribusi/store'];
    $this->load->view('distribusi/template/header', $data);
    $this->load->view('distribusi/form_distribusi');
    $this->load->view('distribusi/template/footer');
  }

  public function store(){
    $cekForm = $this->input->post(null,TRUE);
    $tanggal = date('Y-m-d H:i:s');
		$data = [
  			'nama_penerima' => $this->input->post('nama'),
  			'alamat_penerima' => $this->input->post('alamat'),
  			'telepon_penerima' => $this->input->post('telepon'),
  			'nama_pemesan' => $this->input->post('nama_pemesan'),
        'pemesanan' => $this->input->post('pemesanan'),
  			'kurir' => $this->input->post('kurir'),
  			'status' => $this->input->post('status'),
  			'tanggal_kirim' => $tanggal
			];
			$result = $this->Model_Pengiriman->tambah_pengiriman($data);

			if($result){
			     $this->session->set_flashdata('alert-success', 'Data berhasil ditambahkan');
			     redirect('distribusi');
			} else{
		      $this->session->set_flashdata('alert-failed', 'Data gagal ditambahkan');
			    redirect('distribusi');
		  }
  }

  public function edit($id){
    $data = ['action' => 'distribusi/update',
             'data' => $this->Model_Pengiriman->get_data_by_id($id)];

    $this->load->view('distribusi/template/header', $data);
    $this->load->view('distribusi/form_distribusi');
    $this->load->view('distribusi/template/footer');
  }

  public function update(){
    $cekForm = $this->input->post(null,TRUE);
    $tanggal = date('d-m-Y');
    $id = $this->input->post('id');
		$data = [
  			'nama_penerima' => $this->input->post('nama'),
  			'alamat_penerima' => $this->input->post('alamat'),
  			'telepon_penerima' => $this->input->post('telepon'),
  			'nama_pemesan' => $this->input->post('nama_pemesan'),
        'pemesanan' => $this->input->post('pemesanan'),
  			'kurir' => $this->input->post('kurir'),
  			'status' => $this->input->post('status'),
  			'tanggal_kirim' => $tanggal
			];
			$result = $this->Model_Pengiriman->update_pengiriman($id, $data);
			if($result){
			     $this->session->set_flashdata('alert-success', 'Data berhasil diupdate');
			     redirect('distribusi');
			} else{
		      $this->session->set_flashdata('alert-failed', 'Data berhasil diupdate');
			    redirect('distribusi');
		  }
  }

  public function dikirim(){
    $id = $this->input->post('id');
    $data = $this->Model_Pengiriman->set_status_kirim($id);
    if($data){
      $this->session->set_flashdata('alert-success', 'Data selesai dikirim');
      redirect('distribusi');
    }else{
      $this->session->set_flashdata('alert-failed', 'Status gagal dirubah');
      redirect('distribusi');
    }
  }

  public function delete(){
    $id = $this->input->post('id');
    $hapus = $this->Model_Pengiriman->hapus_pengiriman($id);
    if($hapus){
      $this->session->set_flashdata('alert-success', 'Data berhasil dihapus');
      redirect('distribusi');
    }else{
      $this->session->set_flashdata('alert-failed', 'Data gagal dihapuss');
      redirect('distribusi');
    }
  }
}
