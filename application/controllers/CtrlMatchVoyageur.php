<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CtrlMatchVoyageur extends CI_Controller {
	
	
	public function getMatch()
	{
<<<<<<< HEAD
		$this->load->model('Model_MatchVoyageur');
		$data["Titre"] = "Mes messages";
		$data["MesMatch"] = $this->Model_MatchVoyageur->getMesMatch();
		$this->load->view('Tchat',$data);
=======
		//$this->load->model('Model_MatchVoyageur');
		$data["Titre"] = "Mes messages";
		$this->load->view('MatchVoyageur',);
>>>>>>> 077d2b3b67055e78e0fdcf5843e49c966e21548c
	}
}

?>
