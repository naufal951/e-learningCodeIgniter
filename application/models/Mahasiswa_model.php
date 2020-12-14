<?php 

class Mahasiswa_model extends CI_model {
	public function getAllmahasiswa()
	{
		return $this->db->get('mahasiswa')->result_array();

	}
	public function tambahmahasiswa()
	{
		$data = [
			"nim" => $this->input->post('nim'),
			"nama" => $this->input->post('nama'),
			"ttl" => $this->input->post('ttl'),
			"jk" => $this->input->post('jk'),
			"notelp" => $this->input->post('notelp'),
			"alamat" => $this->input->post('alamat'),
			"angkatan" => $this->input->post('angkatan')
			];

			$this->db->insert('mahasiswa', $data);
	}
	public function hapusmahasiswa($id_mhs)
	{
		$this->db->where('id_mhs',$id_mhs);
		$this->db->delete('mahasiswa');
	}
	public function getmahasiswabyid($id_mhs)
	{
		return $this->db->get_where('mahasiswa', ['id_mhs' => $id_mhs])->row_array();
	}
	public function ubahdatamhasiswa()
	{		
	$data = [
			"nim" => $this->input->post('nim'),
			"nama" => $this->input->post('nama'),
			"ttl" => $this->input->post('ttl'),
			"jk" => $this->input->post('jk'),
			"notelp" => $this->input->post('notelp'),
			"alamat" => $this->input->post('alamat'),
			"angkatan" => $this->input->post('angkatan')
		];
		$this->db->where('id_mhs', $this->input->post('id_mhs'));
			$this->db->update('mahasiswa', $data);
}
}