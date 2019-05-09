<?php

	class Model_Pengiriman extends CI_Model
	{
		public function __construct()
	    {
	        parent::__construct();
	        $this->load->helper(array('form', 'url'));
	    }

		public function get_all()
	    {
	        $query = $this->db->order_by('kode_pengiriman','DESC')->get('pengiriman');
	        return $query->result_array();
	    }

		public function tambah_pengiriman($data)
		{
			$this->db->insert('pengiriman',$data);
			return true;
		}

		public function update_pengiriman($id, $data){
			$result = $this->db->where('kode_pengiriman', $id)
							->update('pengiriman', $data);
			if($result){
				return true;
			}else{
				return false;
			}
		}

		public function hapus_pengiriman($id)
		{
			$table = 'pengiriman';
			$this->db->where('kode_pengiriman', $id);
			$delete = $this->db->delete($table);
			if ($delete){
					return TRUE;
			}else{
					return FALSE;
			}
		}

		public function set_status_kirim($id){
			$result = $this->db->where('kode_pengiriman', $id)
							 ->update('pengiriman', ['status' => 'Sudah Dikirim']);
		  if($result){
				return TRUE;
			}else{
				return FALSE;
			}
		}

		public function get_data_by_id($kodepengiriman){
			$data = $this->db->where('kode_pengiriman', $kodepengiriman)
								->limit(1)
								->get('pengiriman');

			if($data->num_rows() > 0){
				return $data->row();
			}else{
				return false;
			}
		}
	}

?>
