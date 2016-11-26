<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CtrlMatchVoyageur extends CI_Controller {
	
	
	public function getMatch()
	{
		//$this->load->model('Model_MatchVoyageur');
		$data["Titre"] = "Mes messages";
		$this->load->view('MatchVoyageur',);
	}
}

?>

