<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CtrlHome extends CI_Controller {
	public function index()
	{
		$this->load->view('Home/AcceuilFirst');
	}
	
	public function login()
	{
		$this->load->view('Home/Login');
	}
	
	public function inscription()
	{
		$this->load->view('Home/Inscription');
	}
}

?>