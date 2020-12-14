<?php
class Materi_model extends CI_model {
	public function getAllmateri()
	{
		return $this->db->get('file')->result_array();
	}
	public function tambahmateri()
	{
		$data = [
			"nama" => $this->input->post('nama_file'),
			"file" => $this->input->post('lokasi')
			];
	}
}