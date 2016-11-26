<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CtrlProfil extends CI_Controller {

    public function Profil()
    {
        $this->load->model('Model_profil');
        $data['monprofil'] = $this->Model_profil->getProfil();
        $this->load->view('profil');
    }
}
