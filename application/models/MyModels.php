<?php  


class MyModels extends CI_Model
{
	
	public function login()
	{
		$user = $this->input->post('username');
		$pass = md5($this->input->post('password'));
		return $this->db->get_where('admin',[
			'username' => $user,
			'password' => $pass
		])->result_array();
	}
}