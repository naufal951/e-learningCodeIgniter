<?php 
class Nilai extends CI_controller {
	public function __construct()
	{
		parent:: __construct();
		$this->load->model('Nilai_model');
	}
	public function index()
	{
		$data['nilai'] = $this->Nilai_model->getAllnilai();

		$this->load->view('top');
		$this->load->view('side');
		$this->load->view('nilai', $data);
	}
}