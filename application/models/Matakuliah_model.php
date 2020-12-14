<?php 

class Matakuliah_model extends CI_model {
	public function getAllmatakuliah()
	{
		return $this->db->get('matakuliah')->result_array();

	}
	public function tambahmatakuliah()
	{
		$data = [
			"nama" => $this->input->post('nama'),
			"sks" => $this->input->post('sks')
			];

			$this->db->insert('matakuliah', $data);
	}
	public function hapusmatakuliah($id_matakuliah)
	{
		$this->db->where('id_matakuliah',$id_matakuliah);
		$this->db->delete('matakuliah');
	}
}