<?php
class Logout extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		
	}
	public function index()
	{
		$this->session->unset_userdata('user_name');
		$this->session->unset_userdata('access_type');
		$this->session->unset_userdata('authenticate');
		echo "<meta http-equiv='refresh' content='0;url=../'>";	
	}
}
?>