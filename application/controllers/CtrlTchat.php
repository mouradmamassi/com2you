<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CtrlTchat extends CI_Controller {
	public function Tchat()
	{
		$this->load->model('Model_Tchat');
		$data["Titre"] = "Mes messages";
		$data["MesMessage"] = $this->Model_Tchat->getMessage();
		$this->load->view('Tchat',$data);
	}
}

?>

