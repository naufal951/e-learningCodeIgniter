<?php  


class Out extends CI_Model
{
	
	public function logout()
	{
		session_start();
		session_unset();
		session_destroy();
		header('location: welcome_message.php');
		exit();
	}
}