<?php

class Mahasiswa extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mahasiswa_model');
		$this->load->library('form_validation');
	}
public function index()
{
	

	$data['mahasiswa'] = $this->Mahasiswa_model->getAllmahasiswa();

	$this->load->view('top');
	$this->load->view('side');
	$this->load->view('mahasiswa', $data);
}
public function tambah()
{
	$this->form_validation->set_rules('nim','Nim', 'required');
		if( $this->form_validation->run() == FALSE ) {
			$this->load->view('top');
			$this->load->view('side');
			$this->load->view('tambahmahasiswa');
		}
		else
		{
			$this->Mahasiswa_model->tambahmahasiswa();
			$this->session->set_flashdata('flash','Ditambahkan');
			redirect('mahasiswa/tambah');
		}
}
public function hapus($id_mhs)
{
	$this->Mahasiswa_model->hapusmahasiswa($id_mhs);
	$this->session->set_flashdata('flash','Dihapus');
	redirect('mahasiswa');
}
public function edit($id_mhs)
	{
		$data['mahasiswa'] = $this->Mahasiswa_model->getmahasiswabyid($id_mhs);

		$this->load->view('top');
		$this->load->view('side');
		$this->load->view('editmahasiswa', $data);
		
		
	}
	public function mahasiswaedit()
	{
		$this->Mahasiswa_model->ubahdatamhasiswa();
		$this->session->set_flashdata('ubah','Diubah');
		redirect('mahasiswa');
	}
}