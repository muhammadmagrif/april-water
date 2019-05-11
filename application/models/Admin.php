<?php
class Admin extends CI_Model{
 
	public $table = 'karyawan';

	public function show()
	{
		$data = $data = $this->db->get($this->table)->result();
		
		return $data;
	}
}
?>