<?php 

class mAdmin extends CI_model{
   
    public function getAllData(){
        return $this->db->get('kritik')->result_array();
    }
    public function cariData(){
        $key = $this->input->post("cari",true);
        $this->db->like('nama',$key);
        $this->db->or_like('email',$key);
        $this->db->or_like('tanggal_upload',$key);
        return $this->db->get("kritik")->result_array();

    }
   
}