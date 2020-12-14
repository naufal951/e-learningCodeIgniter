<?php

class Matakuliah extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Matakuliah_model');
		$this->load->library('form_validation');
	}
public function index()
{
	

	$data['matakuliah'] = $this->Matakuliah_model->getAllmatakuliah();

	$this->load->view('top');
	$this->load->view('side');
	$this->load->view('matakuliah', $data);
}
public function tambah()
{
	$this->form_validation->set_rules('nama','Name', 'required');
		if( $this->form_validation->run() == FALSE ) {
			$this->load->view('top');
			$this->load->view('side');
			$this->load->view('tambahmatakuliah');
		}
		else
		{
			$this->Matakuliah_model->tambahmatakuliah();
			$this->session->set_flashdata('flash','Ditambahkan');
			redirect('matakuliah/tambah');
		}
}
public function hapus($id_matakuliah)
{
	$this->Matakuliah_model->hapusmatakuliah($id_matakuliah);
	$this->session->set_flashdata('flash','Dihapus');
	redirect('matakuliah');
}
}