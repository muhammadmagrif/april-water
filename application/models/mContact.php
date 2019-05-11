<?php 

class mContact extends CI_model{
   
    public function tambahData(){
        $tanggal = date("Y/m/d");
        $data = [
            "id_kritik"=>'',
            "nama"=> $this->input->post('nama',true),
            "email"=>$this->input->post('email'),
            "pesan"=>$this->input->post('pesan'),
            "tanggal_upload" => $tanggal
        ];
        $this->db->insert('kritik',$data);
    }
   
}