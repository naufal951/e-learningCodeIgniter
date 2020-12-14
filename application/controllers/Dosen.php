<?php

class Dosen extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Dosen_model');
		$this->load->library('form_validation');
	}
public function index()
{
	

	//$data['judul'] = 'Halaman Dosen';
	$data['dosen'] = $this->Dosen_model->getAlldosen();

	$this->load->view('top');
	
	$this->load->view('side');
	$this->load->view('dosen', $data);
}
public function tambah()
{	$data['array'] = $this->Dosen_model->nama();
		$this->load->view('top');
		$this->load->view('side');
		$this->load->view('tambahdosen', $data);

	}

public function tes()
{
		$this->Dosen_model->tambahdosen();
		$this->session->set_flashdata('flash', 'Ditambahkan');
		redirect('dosen/tambah');
}
	public function hapus($id_dosen)
	{
		$this->Dosen_model->hapusdosen($id_dosen);
		$this->session->set_flashdata('flash','Dihapus');
		redirect('dosen');
	}
	public function edit($id_dosen)
	{
		$data['dosen'] = $this->Dosen_model->getdosenbyid($id_dosen);

		$this->load->view('top');
		$this->load->view('side');
		$this->load->view('editdosen', $data);
		
		

	}
	public function dosenedit()
	{
		$this->Dosen_model->ubahdatadosen();
		$this->session->set_flashdata('ubah','Diubah');
		redirect('dosen');
	}
}
