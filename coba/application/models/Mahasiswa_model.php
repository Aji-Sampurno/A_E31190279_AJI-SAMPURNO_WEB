<?php 
// membuat class model, dengan syarat nama file sama dengan nama Class
class Mahasiswa_model extends CI_Model {
	// idenfikasi variable
	public function get_data(){
		$data_mahasiswa = [
			["nama"=>"Faiz Muazzam","prodi"=>"MIF"],
			["nama"=>"Ahcmad Salvani A","prodi"=>"TKK"],
			["nama"=>"M.R.A.R.P","prodi"=>"TIF"]
		];
		// mengembalikan nilai variabel data angkatan
		return $data_mahasiswa;
	}

	public function getAll(){
		$this->db->select('*');
		$this->db->from('tm_user');
		$this->db->join('tm_grub','tm_user.grub = tm_grub.id_grub');
		$query = $this->db->get();
		return $query;
	}

	public function input_data($data,$table)
	{
		$this->db->insert($table,$data);
	}
}
?>