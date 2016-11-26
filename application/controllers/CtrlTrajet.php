<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CtrlTrajet extends CI_Controller {

    public function Trajet()
    {
        $this->load->model('Model_trajet');
        $data['montrajet'] = $this->Model_trajet->getProfil();
        $this->load->view('trajet');
    }
}
