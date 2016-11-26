<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CtrlHome extends CI_Controller {
	public function index()
	{
		$dejaAuth = FALSE;
		if ($dejaAuth){
			$this->redirectTrajetMatch(1);
		}else{
			$this->load->view('Home/AcceuilFirst');
		}
	}
	
	public function login()
	{
		return($this->load->view('Home/Login'));
	}
	
	public function inscription()
	{
		return($this->load->view('Home/Inscription'));
	}
	
	public function logon($login,$mdp)
	{
		$valideConnect = TRUE;
		if ($valideConnect){				
			$this->redirectTrajetMatch(0);
		}else{
			return($this->load->view('Home/Login'));
		}
	}
	
	public function redirectTrajetMatch($nbTrajet)
	{
		if ($nbTrajet==0){
			redirect('/CtrlTrajet/index');
		}else{
			redirect('/CtrlMatchVoyageur/index');
		}
	}
}

?>