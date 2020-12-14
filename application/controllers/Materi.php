<?php 
class Materi extends CI_controller {
public function __construct()
{
	parent:: __construct();
	$this->load->model('Materi_model');
	$this->load->library('form_validation');
}
	public function index()
	{
		$data['materi'] = $this->Materi_model->getAllmateri();
		$this->load->view('top');
		$this->load->view('side');
		$this->load->view('materi', $data);
	}

	public function tambah()
	{
		$this->form_validation->set_rules('nama','Name', 'required');
		if( $this->form_validation->run() == FALSE ) {
			$this->load->view('top');
			$this->load->view('side');
			$this->load->view('tambahmateri');
		}
		else
		{
			$this->Materi_model->tambahmateri();
			redirect('materi/tambah');
		}
	}
}