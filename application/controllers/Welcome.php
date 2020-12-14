<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('MyModels');
	}
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function login()
	{
		$cek = $this->MyModels->login();
		if (count($cek) == 1) {
			$this->session->set_userdata([
				'user' => $this->input->post('username')
			]);
			$this->load->view('top');
		} else {
			$this->session->set_flashdata('gagal','Anda Gagal Login..!!');
			redirect('welcome/index');
		}
	}
}
