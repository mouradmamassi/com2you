<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CtrlHome extends CI_Controller {
	public function index()
	{
		$this->load->view('Home/AcceuilFirst');
	}
	
	public function authen($login,$mdp)
	{
		if (isset($login)){
			$this->load->model('Model_User');
			$data = $this->Model_User->getAuthen($login,$mdp);
		}else{
			$data['idUser']=0;
		}
		return($data);
	}
	
	public function login()
	{
		$this->load->view('Home/Login');
	}
	
	public function verifLogin()
	{
		$login = $this->input->post('login');
		$mdp = $this->input->post('pwd');
		$authen = $this->authen($login,$mdp);
		$test = $authen[0];
		$test2 = $test->ID;		
		if ($test2==0 ){
			$this->login();
		}else{
			$this->redirectTrajetMatch();
		}
	}
	
	public function ValiderFormLogin()
	{
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		
		$this->form_validation->set_rules('inputEmail','Login !','required');
		$this->form_validation->set_rules('inputPassword','Mdp !','required');
		
	}	
	
	public function inscription()
	{
		$this->load->view('Home/Inscription');
	}
	
	public function verifInscription()
	{
		$login = $this->input->post('email');
		if ($this->verifLoginDejaUse($login)){
			$this->inscription();
		}else{
			redirect('/CtrlProfil/Profil');
		}
	}
	
	public function verifLoginDejaUse($login)
	{
		return false;
	}
	
	public function logon($login,$mdp)
	{
		$valideConnect = TRUE;
		if ($valideConnect){				
			$this->redirectTrajetMatch(0);
		}else{
			$this->load->view('Home/Login');
		}
	}
	
	public function redirectTrajetMatch()
	{
		$nbTrajet = 0;
		if ($nbTrajet==0){
			redirect('/CtrlTrajet/trajet');
		}else{
			redirect('/CtrlMatchVoyageur/MatchVoyageur');
		}
	}
}

?>