<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CtrlProfil extends CI_Controller {

    public function Profil()
    {
        //$this->load->model('Model_Profil');
//       // $data['monprofil'] = $this->Model_profil->getProfil();
       //$data['monprofil'] = $this->Model_Profil->getProfil();
        $data['monprofil']= array(
            'nom' => 'Hervé P',
            'communication' => 'Communication Digitale',
            'nbcroise' => '12',
            'description' => 'Ceci est ma description/biographie'
        );
        $this->load->view('profil',$data);
    }
}
