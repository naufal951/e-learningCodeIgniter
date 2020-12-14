<?php
class Nilai_model extends CI_model {
	public function getAllnilai()
	{
		return $this->db->get('nilai')->result_array();
	}
}