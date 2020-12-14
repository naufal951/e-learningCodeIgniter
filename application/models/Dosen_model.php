<?php 

class Dosen_model extends CI_model {
	public function getAlldosen()
	{
		return $this->db->get('dosen')->result_array();

	}
	public function tambahdosen()
	{
		$data = [
			"nip" => $this->input->post('nip'),
			"nama" => $this->input->post('nama'),
			"ttl" => $this->input->post('ttl'),
			"jk" => $this->input->post('jk'),
			"notelp" => $this->input->post('notelp'),
			"alamat" => $this->input->post('alamat'),
			"id_matakuliah" => $this->input->post('id_matakuliah')
			];

			$this->db->insert('dosen', $data);
	}
	public function nama()
	{
		return $this->db->get('matakuliah')->result_array();
	}
	public function hapusdosen($id_dosen)
	{
		$this->db->where('id_dosen',$id_dosen);
		$this->db->delete('dosen');
	}
	public function getdosenbyid($id_dosen)
	{
		return $this->db->get_where('dosen', ['id_dosen' => $id_dosen])->row_array();
	}
	public function ubahdatadosen()
	{		
	$data = [
			"nip" => $this->input->post('nip'),

			"nama" => $this->input->post('nama'),
			"ttl" => $this->input->post('ttl'),
			"jk" => $this->input->post('jk'),
			"notelp" => $this->input->post('notelp'),
			"alamat" => $this->input->post('alamat'),
			"id_matakuliah" => $this->input->post('id_matakuliah')
		];
		$this->db->where('id_dosen', $this->input->post('id_dosen'));
			$this->db->update('dosen', $data);
}
}